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
    <section id="single">
        <div class="container">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <h2><?php wp_title('',true); ?></h2>
            <div class="thumbnail"><?php the_post_thumbnail( 'thumbnail_360_205' ); ?></div>
            <div class="text"><?php the_content( );?></div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?> 
            </div>
    </section>
  
<?php get_footer(); ?>