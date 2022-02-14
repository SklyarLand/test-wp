<?php
/**
 * @var WP_Post $post
 */
?>
<li class="page-loop__item wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">

    <a href="#" class="favorites-link favorites-link__add" title="Добавить в Избранное"
       role="button">
        <span class="icon-heart"><span class="path1"></span><span class="path2"></span></span>
    </a>

    <a href="<?php echo get_permalink($post->id) ;?>" class="page-loop__item-link">
        <div class="page-loop__item-image">
            <?php echo get_the_post_thumbnail( $post->id, 'full'); ?>
            <div class="page-loop__item-badges">
                <span class="badge">Услуги 0%</span>
                <span class="badge">Комфорт+</span>
            </div>
        </div>

        <div class="page-loop__item-info">
            <h3 class="page-title-h3"><?php echo $post->post_title; ?></h3>
            <p class="page-text">Срок сдачи до 3 кв. 2022 г.</p>
            <div class="page-text to-metro">
                <span class="icon-metro icon-metro--red"></span>
                <span class="page-text">Студенческая <span> 5 мин.</span></span>
                <span class="icon-walk-icon"></span>
            </div>
            <span class="page-text text-desc">пр. Карла Маркса, 167/2</span>
        </div>
    </a>
</li>
