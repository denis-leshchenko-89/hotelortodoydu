</div>
<footer id="footer">
        <div class="footer_top">
            <div class="container">
                <div id="nav_footer">
                    <div class="divider"></div>
                <?php if( get_field('footer_logo','option')): ?>
                 <?php  $image=get_field('footer_logo','option'); ?>
                    <div class="logo_footer">  <a href="<?php echo home_url();?>"><img src="<?php  echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"></a></div>
                <?php endif; ?>
    <?php 
        $args = array(
            'theme_location' => 'footer_menu',
            'menu' => 'menu',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'menu_footer',
            'menu_id' => 'menu_footer',
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
                    <div class="divider"></div>
                </div>
                <div class="footer_contact">
                    <div class="phone_first">
                            <a href="tel:<?php echo get_field('phone_first','option'); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/icon_phone_first.png" alt=""><?php echo get_field('phone_first','option'); ?></a>
                        </div>
                        <div class="phone_second">
                            <a href="tel:<?php echo get_field('phone_second','option'); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/icon_phone_second.png" alt=""><?php echo get_field('phone_second','option'); ?></a>
                        </div>
                    <div class="email">
                        <a href="mailto:<?php echo get_field('email_footer','option'); ?> "><img src="<?php bloginfo("template_directory"); ?>/images/icon_email.png" alt=""><?php echo get_field('email_footer','option'); ?> </a>
                    </div>
                    <div class="address">
                        <a href=""><img src="<?php bloginfo("template_directory"); ?>/images/icon_marker.png" alt=""><?php echo get_field('address_footer','option'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="copyright"><?php echo get_field('copyright','option'); ?></div>
            </div>
        </div>
    </footer>
    </div>
      <?php wp_footer(); ?>
</body>
</html>
