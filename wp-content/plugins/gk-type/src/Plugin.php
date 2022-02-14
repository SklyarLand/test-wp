<?php


namespace App\Gk;



class Plugin
{
    const ACF_GROUP = 6;

    /**
     * Plugin constructor.
     */
    public function __construct()
    {
        add_action( 'init', [$this, 'init']);
        add_action('wp_ajax_get_gk', [(new Ajax\GetGkAjaxHandler), 'handle']);
    }

    public function init()
    {
        register_taxonomy(Taxonomy::NAME, [PostType::NAME], Taxonomy::getParameters());
        register_post_type( PostType::NAME, PostType::getParameters());
    }

}