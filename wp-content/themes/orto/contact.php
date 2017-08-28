<?php 
/*
Template Name:Контакты
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
    <section id="contact_page">
        <div class="container">
            <h2><?php wp_title('',true); ?></h2>
            <div class="contact">
            <?php if( have_rows('contact_data')): ?>
<?php while( have_rows('contact_data') ): the_row(); ?>
                <div class="contact_item">
                    <?php if( get_sub_field('contact_thumbnail')): ?>
                        <?php  $image=get_sub_field('contact_thumbnail'); ?>
                          <div class="thumbnail"><img src="<?php  echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"></div>
                    <?php endif; ?>
                    <h3><?php echo get_sub_field('contact_title') ?></h3>
                    <div class="text">
                    <a href=""><?php echo get_sub_field('contact_description') ?></a>
                    </div>
                </div>
     <?php endwhile; ?>
     <?php endif; ?>
            </div>
            <div class="map_outer">
            <div id="map"></div>

                <div class="interests">
                    <h3><?php echo get_field('interesting_heading') ?></h3>
                    <div class="list">
                        <?php echo get_field('interesting_list') ?>
                    </div>
                  
                </div>
            </div>
    </section>
    <script>

    <?php $map=get_field('map');?> 

    var myLatlng = {
        lat: <?php echo $map['lat']; ?>,
        lng:  <?php echo $map['lng']; ?>
    };
    var map = new google.maps.Map(document.getElementById('map'), {

        zoom: 17,
        scrollwheel: false,
        center: myLatlng,
         disableDefaultUI: true
    });
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Нажмите для увеличения'
    });
 map.addListener('center_changed', function() {
    window.setTimeout(function() {
      map.panTo(marker.getPosition());
    }, 100);
  });

  marker.addListener('click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });
    </script>
<?php get_footer(); ?>
