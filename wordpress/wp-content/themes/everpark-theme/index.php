<?php get_header(); ?>

<div class="container hero-container d-flex align-items-center">
    <div class="row hero-columns">
        <div class="col-md-6">
            <h1 class="hero-header">Welcome to Hyperland</h1>
            <p class="hero-text">EverPark is spreading its wings all over the country. Now there are already 13 EverParks in Finland.</p>
            <button class="main-btn">Nearest park</button>
            <button class="second-btn">Watch video</button>
        </div>
        <div>

        </div>
    </div>
</div>
<div class="video-container">
</div>
<div class="news-container">
    <div class="container">
        <div class="row news-row flex-nowrap">
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
                    <div class="col-md-4 col-sm-4">
                        <img class="w-100" src="<?php echo the_post_thumbnail_url(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_field('news_text'); ?></p>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</body>