<?php get_header(); ?>
<?php

/**
 * @var WP_Query $wp_query
 */
global $wp_query;

$paged_args = array_merge($wp_query->query_vars, [
    'posts_per_page' => \App\Gk\Plugin::ACF_GROUP,
]);
$wp_query = new WP_Query($paged_args);

?>
<div class="container">

    <div class="page-top">

        <nav class="page-breadcrumb" itemprop="breadcrumb">
            <a href="/">Главная</a>
            <span class="breadcrumb-separator"> > </span>

            Новостройки
        </nav>

        <div class="page-top__switchers">

            <div class="container">
                <div class="row">

                    <div class="page-top__switchers-inner">

                        <a href="#" class="page-top__filter">
                            <span class="icon-filter"></span>
                            Фильтры
                        </a>

                        <a href="#" data-tab-name="loop" class="page-top__switcher tab-nav active">
                            <span class="icon-grid"></span>
                        </a>

                        <a href="#" data-tab-name="map" class="page-top__switcher tab-nav">
                            <span class="icon-marker"></span>
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="page-section">

        <div class="page-content">

            <h1 class="visuallyhidden">Новостройки</h1>
            <div class="page-loop__wrapper loop tab-content tab-content__active">
                <ul class="page-loop with-filter">
                    <?php
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/gk-cart');
                    }
                    ?>
                </ul>
                <div class="show-more">

                    <button class="show-more__button">

                        <span class="show-more__button-icon"></span>

                        Показать еще

                    </button>

                </div>

            </div>

            <div class="page-map tab-content map">

                <h1>Тут будет карта</h1>

            </div>

        </div>

        <div class="page-filter fixed">

            <div class="page-filter__wrapper">

                <form id="page-filter" class="page-filter__form">

                    <div class="page-filter__body">
                        <?php
                        $filter_fields = acf_get_fields(\App\Gk\Plugin::ACF_GROUP);

                        foreach ($filter_fields as $field) {
                            get_template_part( "template-parts/gk-filter-fields/{$field['name']}", null, ['field' => $field]);
                        }
                        ?>
                    </div>

                    <div class="page-filter__buttons">

                        <button class="button button--pink w-100" type="submit" id="apply_filter">Применить фильтры
                        </button>

                        <button class="button w-100" type="reset" id="reset_filter">Сбросить фильтры
                            <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M8.5 0.942702L7.5573 0L4.49999 3.05729L1.4427 0L0.5 0.942702L3.55729 3.99999L0.5 7.0573L1.4427 8L4.49999 4.94271L7.55728 8L8.49998 7.0573L5.44271 3.99999L8.5 0.942702Z"/>
                            </svg>
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>
<?php get_footer(); ?>
