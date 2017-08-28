<?php 
/*
Template Name:Акции
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
    <section id="shares_page">
        <div class="container">
            <h2>Акции</h2>
            <div class="filter">
                <div class="current_past">
                <?php if(!isset($_COOKIE['order']))
                {
                 $order='DESC';
                }

                else
                {
                   $order= $_COOKIE['order'];
                }

                 ?>
                    <div class="current">
                        <input type="radio" name="filter" class="radio" <?php  if( $order=='DESC')echo 'checked="checked"';  ?> id="current">
                        <label for="current">Текущие</label>
                    </div>
                    <div class="past">
                        <input type="radio" name="filter" class="radio" <?php  if( $order=='ASC')echo 'checked="checked"';  ?> id="past">
                        <label for="past">Прошедшие</label>
                    </div>
                </div>
            </div>
            <div class="shares">
        
    <?php  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>  

                <?php
                $args = array(
                    'post_type'=>'shares',
                    'order'=> $order,
                    'orderby'=>'data',
                    'posts_per_page' =>'4',
                      'paged' => $paged ,
                              
                    );
            $query = new WP_Query( $args );
             ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="shares_item">
                    <div class="thumbnail">
                           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('tumbnail_news'); ?></a>
                    </div>
                    <div class="title_data_description">
                        <div class="title"><a href=""><?php the_title(); ?></a></div>
                        <div class="description"><?php the_excerpt();?></div>
                        <div class="read_more"><a href="<?php the_permalink(); ?>">Читать далее</a></div>
                    </div>
                </div>
           <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        <?php wp_reset_query() ; ?>
            </div>
     <div class="pagination">
              <?php wp_pagenavi('', '',  true, $args,$query); 
          ?>
           </div>


        </div>
    </section>
<?php get_footer();?>
