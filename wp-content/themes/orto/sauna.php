<?php
/*
Template Name:Сауна
*/
?>
<?php get_header(); ?>
<section id="tabs_main">
    <div class="container">
        <div class="tabs">
            <?php
            $args = array(
                'theme_location' => 'tabs_menu',
                'menu' => 'tabs_menu',
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'tabs_menu',
                'menu_id' => 'tabs_menu',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            );
            wp_nav_menu($args); ?>
        </div>
    </div>
</section>
<section id="main_slider">

    <div class="slider">
        <?php
        $args = array(
            'post_type' => 'slider',
            'order' => 'DESC',
            'posts_per_page' => '-1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'slider_taxonomy',
                    'field' => 'slug',
                    'terms' => 'sauna'

                )
            )
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="slide" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
                <div class="container">
                    <div class="slide_text">
                        <h2><?php the_title(); ?></h2>
                        <div class="cost_number"><?php the_content(); ?></div>
                        <a href="<?php echo get_field('read_more_in_slider'); ?>" class="read_more">Подробнее</a>
                    </div>
                    <?php if (get_field('show_the_booking_form')): ; ?>
                        <div class="book_form">
                        <?php echo do_shortcode('[contact-form-7 id="487" title="Форма бронировании на слайдере гостиница"]'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    <?php if($query->found_posts>1): ?>
    <div id="navigation_slick">
        <div class="nav_dots_arrow"></div>
    </div>
<?php endif; ?>
</section>

<section id="overview">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'gallery',
            'order' => 'ASC',
            'posts_per_page' => '1',
            'name' => 'sauna'
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) :
        $query->the_post(); ?>
        <div class="video_and_gallery">
            <h3><?php the_title(); ?></h3>
            <div class="video_left">
                <div class="youtube" data-embed="<?php echo get_field('video_youtube'); ?>">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="image_gallery_right">
                <?php if (get_field('gallery')): ?>
                    <?php $images = get_field('gallery'); ?>
                    <?php $i = 0; ?>
                    <?php foreach ($images as $image): ?>
                        <div class="image"
                             style="background-image: url(<?php echo $image['sizes']['large']; ?>); ?>"></div>
                        <?php $i++; ?>
                        <?php if ($i == 4) {
                            break;
                        }
                        ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <div class="button"><a href="/" class="load_all_photo_slider_hotel">Смотреть все фотографии</a></div>
        </div>
        <?php wp_reset_query(); ?>
        <?php
        $args = array(
            'post_type' => 'gallery',
            'order' => 'ASC',
            'posts_per_page' => '1',
            'name' => 'sauna'
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) :
        $query->the_post(); ?>
        <div class="gallery_slider_hotel">
            <?php if (get_field('gallery')): ?>
                <?php $images = get_field('gallery'); ?>
                <?php foreach ($images as $image): ?>
                    <div class="image"><a href="<?php echo $image['sizes']['large']; ?>"><img
                                src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a></div>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        </div>
        <?php wp_reset_query(); ?>
    </div>
</section>
<section id="choice">
    <div class="container">
        <div class="divider"></div>
        <h2><?php echo get_field('reasons_to_choose_a_sauna_in_the_header'); ?></h2>


         <?php if (have_rows('reasons_to_choose_a_sauna_tourists') ||  have_rows('reasons_to_choose_a_sauna_travel') || have_rows('reasons_to_choose_a_sauna_romantics_and_honeymooners') ): ?>

        <div class="tabs">
  <?php if (have_rows('reasons_to_choose_a_sauna_tourists')): ?>
            <div class="tab">
                <div class="tab_text">
                    <a href="" class="selected"><img
                            src="<?php bloginfo("template_directory"); ?>/images/icon_photo.png" alt="">Туристам</a>
                </div>
            </div>
 <?php endif; ?>

         <?php if (have_rows('reasons_to_choose_a_sauna_travel')): ?>
            <div class="tab">
                <div class="tab_text">
                    <a href=""><img src="<?php bloginfo("template_directory"); ?>/images/icon_suitcase.png" alt="">Командировочным</a>
                </div>
            </div>
        <?php endif; ?>

   <?php if (have_rows('reasons_to_choose_a_sauna_romantics_and_honeymooners')): ?>
            <div class="tab">
                <div class="tab_text">
                    <a href=""><img src="<?php bloginfo("template_directory"); ?>/images/icon_heart.png" alt="">Романтикам
                        и молодоженам</a>
                </div>
            </div>
     <?php endif; ?>
        </div>


        <div class="tab_content">
            <div class="tab_panel">
                <?php if (have_rows('reasons_to_choose_a_sauna_tourists')): ?>
                    <?php while (have_rows('reasons_to_choose_a_sauna_tourists')): the_row(); ?>
                        <div class="content_item">
                            <?php if (get_sub_field('tourists_thumbnail')): ?>
                                <?php $image = get_sub_field('tourists_thumbnail'); ?>
                                <div class="thumbnail"><img src="<?php echo $image['url'] ?>"
                                                            alt="<?php echo $image['alt'] ?>"></div>
                            <?php endif; ?>
                            <div class="title"><?php echo get_sub_field('tourists_title'); ?></div>
                            <div class="description"><?php echo get_sub_field('tourists_description'); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="tab_panel">
                <?php if (have_rows('reasons_to_choose_a_sauna_travel')): ?>
                    <?php while (have_rows('reasons_to_choose_a_sauna_travel')): the_row(); ?>

                        <div class="content_item">
                            <?php if (get_sub_field('tourists_thumbnail')): ?>
                                <?php $image = get_sub_field('travel_thumbnail'); ?>
                                <div class="thumbnail"><img src="<?php echo $image['url'] ?>"
                                                            alt="<?php echo $image['alt'] ?>"></div>
                            <?php endif; ?>
                            <div class="title"><?php echo get_sub_field('travel_title'); ?></div>
                            <div class="description"><?php echo get_sub_field('travel_description'); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="tab_panel">


                <?php if (have_rows('reasons_to_choose_a_sauna_romantics_and_honeymooners')): ?>
                    <?php while (have_rows('reasons_to_choose_a_sauna_romantics_and_honeymooners')): the_row(); ?>

                        <div class="content_item">
                            <?php if (get_sub_field('tourists_thumbnail')): ?>
                                <?php $image = get_sub_field('romantics_and_honeymooners_thumbnail'); ?>
                                <div class="thumbnail"><img src="<?php echo $image['url'] ?>"
                                                            alt="<?php echo $image['alt'] ?>"></div>
                            <?php endif; ?>
                            <div class="title"><?php echo get_sub_field('romantics_and_honeymooners_title'); ?></div>
                            <div
                                class="description"><?php echo get_sub_field('romantics_and_honeymooners_description'); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
             <?php endif; ?>
    </div>
</section>
<section id="reviews">
    <div class="container">
        <h2>Отзывы</h2>
        <div class="reviews_slider">
            <div class="slider">

                <?php
                $args = array(
                    'post_type' => 'reviews',
                    'order' => 'ASC',
                    'orderby' => 'data',
                    'posts_per_page' => '-1',
                    'taxonomy_name' => 'sauna'

                );
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                    <div>
                        <div class="reviews_item">
                             <div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail_137_137'); ?></a></div>
                            <div class="title_data_description">
                                <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="data"><?php the_time('j F Y'); ?></div>
                                <div class="description"><?php the_excerpt(); ?> </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                        <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<section id="transfers">
    <div class="container">
        <div class="transfers_text">
          <?php echo get_field('the_text_left_of_the_form'); ?>
        </div>
        <div class="book_form">

         <?php echo do_shortcode('[contact-form-7 id="488" title="Форма бронировании в футере гостиница"]'); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>



