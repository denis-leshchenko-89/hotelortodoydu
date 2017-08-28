<?php 
/*
Template Name:Отзывы
*/
 ?>
<?php get_header(); ?>
   <section id="tabs_page">
        <div class="container">
                <?php 
        $args = array(
            'theme_location' => 'tabs_page_menu',
            'menu' => 'tabs_page_menu',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'tabs_page_menu',
            'menu_id' => 'tabs_page_menu',
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
        wp_nav_menu( $args ); ?>
        </div>
    </section> 
    <section id="reviews_page">
        <div class="container">
            <h2><?php wp_title('',true); ?></h2>
            <div class="reviews">
 <?php
                $args = array(
                    'post_type'=>'reviews',
                    'order'=>'DESC',
                    'orderby'=>'data',        
                    );
                  $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="reviews_item">
                    <div class="thumbnail"><?php the_post_thumbnail('thumbnail_137_137'); ?></div>
                    <div class="title_data_description">
                        <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="data"><?php the_time('j F Y'); ?></div>
                        <div class="description"><?php the_content(); ?> </div>
                        <div class="read_more"><a href="<?php the_permalink(); ?>">Читать далее</a></div>
                    </div>
                </div>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?> 
            </div>
        </div>
        </div>
    </section>
<?php get_footer(); ?>