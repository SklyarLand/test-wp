<?php


namespace App\Gk;


class PostType extends WpRegisterEntity
{
    const NAME = 'gk';

    protected const LABELS = [
        'name'               => 'Жилые Комплексы', // основное название для типа записи
        'singular_name'      => 'Жилой Комплекс', // название для одной записи этого типа
        'add_new'            => 'Добавить ЖК', // для добавления новой записи
        'add_new_item'       => 'Добавление ЖК', // заголовка у вновь создаваемой записи в админ-панели.
        'update_item' => 'Обновить ЖК',
        'edit_item'          => 'Редактирование ЖК', // для редактирования типа записи
        'new_item'           => 'Новый ЖК', // текст новой записи
        'view_item'          => 'Смотреть ЖК', // для просмотра записи этого типа.
        'search_items'       => 'Искать ЖК', // для поиска по этим типам записи
        'not_found'          => 'Не найдено ЖК', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'В корзине нет ЖК', // если не было найдено в корзине
        'menu_name'          => 'Жилые комплексы', // название меню
    ];

    protected const PARAMETERS = [
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-email-alt2',
        'menu_position' => 2,
        'supports' => array('title', 'editor', 'thumbnail'),
        'label'  => null,
        'rewrite' => array('slug' => 'new-buildings'),
    ];
}