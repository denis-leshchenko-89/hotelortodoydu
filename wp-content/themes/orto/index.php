<?php get_header(); ?>
    <section id="news_page">
        <div class="container">
            <h2><?php wp_title('',true); ?></h2>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="news_item">
                <div class="thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail_360_205'); ?></a>
                </div>
                <div class="title_data_description">
                    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="data"><?php the_time('j F Y'); ?></div>
                    <div class="description"><?php the_excerpt();?></div>
                    <div class="read_more"><a href="<?php the_permalink(); ?>">Читать далее</a></div>
                </div>
            </div>
        <?php endwhile; ?>
      <div class="pagination">
      <?php wp_pagenavi(); ?> 
</div>
    <?php else: ?>
    <?php endif; ?> 
</div>
</section>
<?php get_footer(); ?> 