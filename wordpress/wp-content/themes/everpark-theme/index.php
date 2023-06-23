<?php get_header(); ?>

<div class="hero-container">
    <div class="container h-100">
        <div class="row hero-columns h-100 d-flex flex-nowrap align-items-center">
            <div class="col-sm-12 col-md-8 col-lg-6 col-xl-6 col-xxl-5">
                <h1 class="hero-header">Welcome to Hyperland</h1>
                <p class="hero-text">EverPark is spreading its wings all over the country. Now there are already 13 EverParks in Finland.</p>
                <div class="d-flex flex-row gap-3">
                    <button class="main-btn">Nearest park</button>
                    <button class="second-btn d-flex flex-row align-items-center gap-3">
                        <span>Watch video</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="watch-video-icon" d="M9.75004 16.0384V7.96158L16.0384 12L9.75004 16.0384ZM12 22.5C10.1295 22.5 8.40834 22.0442 6.83654 21.1327C5.26475 20.2211 3.98591 18.9403 3.00001 17.2903V20.5H1.50006V14.8077H7.18271V16.3077H4.17499C4.98652 17.7628 6.08331 18.9086 7.46536 19.7452C8.84743 20.5817 10.359 21 12 21C13.9487 21 15.7071 20.4292 17.275 19.2875C18.843 18.1458 19.9308 16.6474 20.5385 14.7923L22.0077 15.1173C21.3218 17.3263 20.059 19.109 18.2192 20.4654C16.3795 21.8218 14.3064 22.5 12 22.5ZM1.55006 11C1.67313 9.9218 1.92376 8.91988 2.30196 7.99425C2.68016 7.06862 3.2167 6.17567 3.91159 5.3154L4.99039 6.375C4.45705 7.06475 4.03334 7.77949 3.71924 8.51922C3.40514 9.25897 3.18719 10.0859 3.06539 11H1.55006ZM6.39039 4.98463L5.33081 3.9058C6.17568 3.22375 7.07599 2.68465 8.03176 2.2885C8.98753 1.89235 9.97694 1.65261 11 1.56927V3.06922C10.1692 3.15256 9.36572 3.35929 8.58944 3.68943C7.81315 4.01956 7.08014 4.45129 6.39039 4.98463ZM17.6058 4.98463C16.9609 4.46411 16.235 4.03397 15.4279 3.69422C14.6208 3.35449 13.8115 3.14616 13 3.06922V1.56927C14.0333 1.66286 15.0305 1.90677 15.9913 2.301C16.9522 2.69523 17.8468 3.23337 18.675 3.9154L17.6058 4.98463ZM20.9308 11C20.8346 10.1115 20.6215 9.28301 20.2914 8.51443C19.9612 7.74583 19.5295 7.03589 18.9962 6.38463L20.0654 5.3154C20.7538 6.13078 21.2952 7.01893 21.6894 7.97983C22.0836 8.94071 22.3307 9.94743 22.4307 11H20.9308Z" fill="#5D328C" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <img class="hero-main-polygon-group" src="/wp-content/uploads/2023/06/purple-polygon-group.png">
    <img class="hero-polygon-group" src="/wp-content/uploads/2023/06/small-lilac-polygon-group.png">
</div>
<div class="video-container d-flex align-items-center justify-content-center">
    <iframe class="video-play z1" width="939" height="626" src="https://www.youtube.com/embed/26u59P0_POc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <img class="video-polygon-group" src="/wp-content/uploads/2023/06/video-graphic-group.png">
</div>
<div class="news-container">
    <div class="container">
        <div class="row news-row d-flex flex-row flex-wrap g-4 pb-5">
            <?php

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order'   => 'ASC'
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) {

                while ($post_query->have_posts()) {
                    $post_query->the_post() ?>
                    <div class="col-sm-12 col-lg-6 col-xxl-4 z1">
                        <div class="news-column h-100 d-flex flex-column">
                            <img class="news-image w-100 rounded-top" src="<?php echo the_post_thumbnail_url(); ?>">
                            <div class="news-content h-100 d-flex flex-column">
                                <div class="news-header-wrapper">
                                    <h3 class="pb-4"><?php the_title(); ?></h3>
                                </div>
                                <p class="news-text"><?php the_field('news_text'); ?></p>
                                <div class="flex1 d-flex align-items-end">
                                    <div class="d-flex gap-3 align-items-center">
                                        <a class="news-single-link">Lue lisää</a>
                                        <svg width="26" height="10" viewBox="0 0 26 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 5H24" stroke="#5D328C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M20.5 1L24.5 5L20.5 9" stroke="#5D328C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button class="main-btn">Lisää uutisia</button>
            </div>
        </div>
    </div>
    <img class="news-polygon-group1" src="/wp-content/uploads/2023/06/lilac-polygons-up.png">
    <img class="news-polygon-group2" src="/wp-content/uploads/2023/06/lilac-polygons-down.png">
</div>
</body>