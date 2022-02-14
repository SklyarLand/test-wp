<?php

namespace App\Gk\Ajax;

use \WP_Query;

class GetGkAjaxHandler
{
    /**
     * @var array
     */
    private array $fields;

    /**
     * Обработка запроса
     */
    function handle() {
        $this->getData();
        $this->validate();
        $query = $this->createQuery();
        $this->output($query);
        die();
    }

    /**
     *  Получает данные из $_GET
     */
    function getData()
    {
        $this->fields = [];

        $filter_fields = $this->getAcfFields();

        foreach ($_GET['data'] as $item) {
            $name = $item['name'];
            if (isset($filter_fields[$name])) {
                if (isset($this->fields[$name])) {
                    $this->fields[$name]['value'][] = $item['value'];
                } else {
                    $this->fields[$name] = [
                        'acf' => $filter_fields[$name],
                        'value' => [$item['value']],
                    ];
                }
            }
        }
    }

    /**
     * Получить поля из ACF
     * @return array
     */
    private function getAcfFields()
    {
        $filter_fields = acf_get_fields(\App\Gk\Plugin::ACF_GROUP);
        $result = [];
        foreach ($filter_fields as $field) {
            $result[$field['name']] = $field;
        }
        return $result;
    }

    /**
     * Проверка значений
     */
    private function validate()
    {
        if (isset($this->fields['metro_distance']) && in_array('any', $this->fields['metro_distance']['value'])) {
            unset($this->fields['metro_distance']);
        }
        if (isset($this->fields['deadline']) && in_array('all', $this->fields['deadline']['value'])) {
            unset($this->fields['deadline']);
        }
    }

    /**
     * @return WP_Query
     */
    private function createQuery()
    {
        $query_data = [
            'numberposts' => \App\Gk\Plugin::ACF_GROUP,
            'posts_per_page' => \App\Gk\Plugin::ACF_GROUP,
            'post_type'   => \App\Gk\PostType::NAME,
            'suppress_filters' => true,
            'meta_query' => [ ],
        ];

        foreach ($this->fields as $key => $field) {
            $query_data['meta_query'] = array_merge($query_data['meta_query'], $this->getMetaFieldToQuery($field));
        }

        return new WP_Query($query_data);
    }

    /**
     * Логика добавления полей в массив meta_query
     * @param array $field
     * @return array
     */
    private function getMetaFieldToQuery(array $field)
    {
        $result = [];
        switch ($field['acf']['type']) {
            case 'checkbox':
                //здесь нужно добавлять массив для каждого значения
                foreach ($field['value'] as $value) {
                    $result[] = [
                        'key' => $field['acf']['name'],
                        'value' => $value,
                        'compare' => 'LIKE',
                    ];
                }
                break;

            case 'radio':
                $result[] = [
                    'key' => $field['acf']['name'],
                    'value' => $field['value'],
                ];
                break;
        }
        return $result;
    }

    /**
     * Вывод постов в HTML
     * @param WP_Query $query
     */
    private function output(WP_Query $query)
    {
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                get_template_part( 'template-parts/gk-cart');
            }
        }
    }
}