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
    <section id="gallery_page">
        <div class="container">
           <h2><?php wp_title('',true); ?></h2>
            <?php
                $args = array(
                    'post_type'=>'gallery',
                    'order'=>'ASC',
                    'posts_per_page' => '1',
                     'name'=>'gostinitsa'
                 );
            $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="video_and_gallery_item">
                <h3><?php the_title(); ?></h3>
                <div class="video_left">
               <div class="youtube" data-embed="<?php echo get_field('video_youtube'); ?>">
                        <div class="play-button"></div>
                    </div>
                </div>
                <div class="image_gallery_right">
          <?php if( get_field('gallery')): ?>
            <?php  $images=get_field('gallery'); ?>
            <?php $i=0; ?>
        <?php  foreach ($images  as $image):  ?>
            <div class="image" style="background-image: url(<?php echo $image['sizes']['large'];  ?>); ?>"></div>
            <?php $i++; ?>
            <?php if($i==4)
                {
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
        <div class="divider"></div>
    </div>
        <?php wp_reset_query() ; ?>
<?php
                $args = array(
                    'post_type'=>'gallery',
                    'order'=>'ASC',
                     'posts_per_page' => '1',
                     'name'=>'gostinitsa'
                 );
            $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
         <div class="gallery_slider_hotel">
          <?php if( get_field('gallery')): ?>
            <?php  $images=get_field('gallery'); ?>
        <?php  foreach ($images  as $image):  ?>
            <div class="image"><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a></div>
            <?php endforeach; ?>
             <?php endif; ?>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
        </div>
        <?php wp_reset_query() ; ?>

            <?php
                $args = array(
                    'post_type'=>'gallery',
                    'order'=>'ASC',
                     'posts_per_page' => '1',
                     'name'=>'hostel'
                 );
            $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="video_and_gallery_item">
                 <h3><?php the_title(); ?></h3>
                <div class="video_left">
                    <div class="youtube" data-embed="<?php echo get_field('video_youtube'); ?>">
                        <div class="play-button"></div>
                    </div>
                </div>
                <div class="image_gallery_right">
          <?php if( get_field('gallery')): ?>
            <?php  $images=get_field('gallery'); ?>
            <?php $i=0; ?>
        <?php  foreach ($images  as $image):  ?>
             <div class="image" style="background-image: url(<?php echo $image['sizes']['large'];  ?>); ?>"></div>
            <?php $i++; ?>
            <?php if($i==4)
                {
                    break;
                } 
             ?>
            <?php endforeach; ?>
             <?php endif; ?>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
        </div>
        <div class="button"><a href="/" class="load_all_photo_slider_hostel">Смотреть все фотографии</a></div>
        <div class="divider"></div>
    </div>
        <?php wp_reset_query() ; ?>
<?php
                $args = array(
                    'post_type'=>'gallery',
                    'order'=>'ASC',
                    'posts_per_page' => '1',
                     'name'=>'hostel'
                 );
            $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
         <div class="gallery_slider_hostel">
          <?php if( get_field('gallery')): ?>
            <?php  $images=get_field('gallery'); ?>
        <?php  foreach ($images  as $image):  ?>
            <div class="image"><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a></div>
            <?php endforeach; ?>
             <?php endif; ?>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
        </div>

        <?php wp_reset_query() ; ?>
         <?php
                $args = array(
                    'post_type'=>'gallery',
                    'order'=>'ASC',
                    'posts_per_page' => '1',
                     'name'=>'sauna'
                 );
            $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="video_and_gallery_item">
                <h3><?php the_title(); ?></h3>
                <div class="video_left">
              <div class="youtube" data-embed="<?php echo get_field('video_youtube'); ?>">
                        <div class="play-button"></div>
                    </div>
                </div>
                <div class="image_gallery_right">
          <?php if( get_field('gallery')): ?>
            <?php  $images=get_field('gallery'); ?>
            <?php $i=0; ?>
        <?php  foreach ($images  as $image):  ?>
            <div class="image" style="background-image: url(<?php echo $image['sizes']['large'];  ?>); ?>"></div>
            <?php $i++; ?>
            <?php if($i==4)
                {
                    break;
                } 
             ?>
            <?php endforeach; ?>
             <?php endif; ?>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
        </div>
         <div class="button"><a href="/" class="load_all_photo_slider_sauna">Смотреть все фотографии</a></div>
        <div class="divider"></div>
    </div>

        <?php wp_reset_query() ; ?>
<?php
                $args = array(
                    'post_type'=>'gallery',
                    'order'=>'ASC',
                    'posts_per_page' => '1',
                     'name'=>'sauna'
                 );
            $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
         <div class="gallery_slider_sauna">
          <?php if( get_field('gallery')): ?>
            <?php  $images=get_field('gallery'); ?>
        <?php  foreach ($images  as $image):  ?>
            <div class="image"><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a></div>
            <?php endforeach; ?>
             <?php endif; ?>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
        </div>
        <?php wp_reset_query() ; ?>
         <?php
                $args = array(
                    'post_type'=>'gallery',
                    'order'=>'ASC',
                    'posts_per_page' => '1',
                     'name'=>'arenda-konferents-zala'
                 );
            $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="video_and_gallery_item">
                <h3><?php the_title(); ?></h3>
                <div class="video_left">
                 <div class="youtube" data-embed="<?php echo get_field('video_youtube'); ?>">
                        <div class="play-button"></div>
                    </div>
                </div>
                <div class="image_gallery_right">
          <?php if( get_field('gallery')): ?>
            <?php  $images=get_field('gallery'); ?>
            <?php $i=0; ?>
        <?php  foreach ($images  as $image):  ?>
            <div class="image" style="background-image: url(<?php echo $image['sizes']['large'];  ?>); ?>"></div>
            <?php $i++; ?>
            <?php if($i==4)
                {
                    break;
                } 
             ?>
            <?php endforeach; ?>
             <?php endif; ?>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
        </div>
          <div class="button"><a href="/" class="load_all_photo_slider_arenda_konferents_zala">Смотреть все фотографии</a></div>
        <div class="divider"></div>
    </div>
        <?php wp_reset_query() ; ?>
<?php
            $args = array(
                'post_type'=>'gallery',
                'order'=>'ASC',
                'posts_per_page' => '1',
                 'name'=>'arenda-konferents-zala'
             );
        $query = new WP_Query( $args );
         ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
     <div class="gallery_slider_arenda_konferents_zala">
      <?php if( get_field('gallery')): ?>
        <?php  $images=get_field('gallery'); ?>
    <?php  foreach ($images  as $image):  ?>
        <div class="image"><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a></div>
        <?php endforeach; ?>
         <?php endif; ?>
  <?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
    </div>
        <?php wp_reset_query() ; ?>




</div>
</section>
  <?php get_footer(); ?> 