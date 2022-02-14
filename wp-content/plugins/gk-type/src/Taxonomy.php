<?php


namespace App\Gk;


class Taxonomy extends WpRegisterEntity
{
    const NAME = 'gk_tax';

    protected const LABELS = [
        'name'              => 'Типы ЖК',
        'singular_name'     => 'Тип ЖК',
        'search_items'      => 'Искать тип',
        'all_items'         => 'Все типы',
        'view_item '        => 'Смотреть тип',
        'parent_item'       => 'Родительский тип',
        'parent_item_colon' => 'Родительский тип:',
        'edit_item'         => 'Редактировать тип',
        'update_item'       => 'Обновить тип',
        'add_new_item'      => 'Добавить тип ЖК',
        'new_item_name'     => 'Новый тип ЖК',
        'menu_name'         => 'Типы ЖК',
        'back_to_items'     => '← Назад к типам',
    ];

    protected const PARAMETERS = [
        'public'                => true,
        'hierarchical'          => false,
        'rewrite'             => true,
        'query_var'           => true,
        'label'  => null,
    ];
}