<?php 
/*
Template Name:О нас
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
    <section id="choice_about">
        <div class="container">
            <h2><?php wp_title('',true); ?></h2>


     <?php if( have_rows('about_us_thumbnail') || have_rows('our_advantages')  || have_rows('history_and_mission')  || have_rows('message_from_the_director')): ?>

            <div class="tabs">

              <?php if( have_rows('facts_about_us')): ?>
                <div class="tab">
                    <div class="tab_text">
                        <a href="" class="selected">Факты о нас</a>
                    </div>
                </div>
     <?php endif; ?>
          <?php if( have_rows('our_advantages')): ?>
                <div class="tab">
                    <div class="tab_text">
                        <a href="">Наши преимущества</a>
                    </div>
                </div>
         <?php endif; ?>
      <?php if( have_rows('history_and_mission')): ?>
                <div class="tab">
                    <div class="tab_text">
                        <a href="">История и миссия</a>
                    </div>
                </div>
       <?php endif; ?>
                <?php if( have_rows('message_from_the_director')): ?>
                <div class="tab">
                    <div class="tab_text">
                        <a href="">Обращение директора</a>
                    </div>
                </div>

      <?php endif; ?>

            </div>
            <div class="tab_content">
                <div class="tab_panel">
         <?php if( have_rows('facts_about_us')): ?>
        <?php while( have_rows('facts_about_us') ): the_row(); ?>
                    <div class="content_item">
                             <?php if( get_sub_field('about_us_thumbnail')): ?>
                             <div class="thumbnail" style="background-image: url(<?php echo get_sub_field('about_us_thumbnail');?>)"></div>
                            <?php endif; ?>
                        <div class="title"><?php echo get_sub_field('about_us_title'); ?></div>
                        <div class="description"><?php echo get_sub_field('about_us_description'); ?></div>
                    </div>
             <?php endwhile; ?>
             <?php endif; ?>
                </div>
         <div class="tab_panel">
         <?php if( have_rows('our_advantages')): ?>
        <?php while( have_rows('our_advantages') ): the_row(); ?>
                    <div class="content_item">
                             <?php if( get_sub_field('our_advantages_thumbnail')): ?>
                             <div class="thumbnail" style="background-image: url(<?php echo get_sub_field('our_advantages_thumbnail');?>)"></div>
                            <?php endif; ?>
                        <div class="title"><?php echo get_sub_field('our_advantages_title'); ?></div>
                        <div class="description"><?php echo get_sub_field('our_advantages_description'); ?></div>
                    </div>
             <?php endwhile; ?>
             <?php endif; ?>
         </div>
     <div class="tab_panel">
         <?php if( have_rows('history_and_mission')): ?>
        <?php while( have_rows('history_and_mission') ): the_row(); ?>
                    <div class="content_item">
                             <?php if( get_sub_field('history_and_mission_thumbnail')): ?>
                             <div class="thumbnail" style="background-image: url(<?php echo get_sub_field('history_and_mission_thumbnail');?>)"></div>
                            <?php endif; ?>
                        <div class="title"><?php echo get_sub_field('history_and_mission_title'); ?></div>
                        <div class="description"><?php echo get_sub_field('history_and_mission_description'); ?></div>
                    </div>
             <?php endwhile; ?>
             <?php endif; ?>
       </div>
    <div class="tab_panel">
         <?php if( have_rows('message_from_the_director')): ?>
        <?php while( have_rows('message_from_the_director') ): the_row(); ?>
                    <div class="content_item">
                             <?php if( get_sub_field('message_from_the_director_thumbnail')): ?>
                             <div class="thumbnail" style="background-image: url(<?php echo get_sub_field('message_from_the_director_thumbnail');?>)"></div>
                            <?php endif; ?>
                        <div class="title"><?php echo get_sub_field('message_from_the_director_title'); ?></div>
                        <div class="description"><?php echo get_sub_field('message_from_the_director_description'); ?></div>
                    </div>
             <?php endwhile; ?>
             <?php endif; ?>
       </div>
    </div>
        <?php endif; ?>

    </section>
    <section id="about_page">
        <div class="container">
            <h2><?php echo get_field('awards_heading') ?></h2>
            <div class="awards">
         <?php if( have_rows('awards')): ?>
        <?php while( have_rows('awards') ): the_row(); ?>
                            <?php if( get_sub_field('awards_image')): ?>
                                          <?php  $image=get_sub_field('awards_image'); ?>    
                          <div class="awards_item"><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['large']; ?>" alt=""></a></div>
                            <?php endif; ?>
             <?php endwhile; ?>
             <?php endif; ?>
              </div>
            </div>
    </section>
<?php get_footer(); ?>