
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php bloginfo('name'); ?> <?php wp_title('',true); ?></title>
    <?php wp_head();?>
</head>
<div id="wrapper">
  <div id="content">
<body <?php body_class(); ?>>
    <header id="header">
        <div class="header_top">
            <div id="nav">
                <div class="container">
                    <div class="mobile_menu">
                        <div class="label">Меню</div>
                        <div class="hamburger">
                            <div class="string"></div>
                            <div class="string"></div>
                            <div class="string"></div>
                        </div>
                    </div>
	<?php 
        $args = array(
            'theme_location' => 'header_menu',
            'menu' => 'header_menu',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'header_menu',
            'menu_id' => 'header_menu',
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
                    </nav>
                </div>
                <div class="header_bottom">
                    <div class="container">
                   <?php if( get_field('header_logo','option')): ?>
					<?php  $image=get_field('header_logo','option'); ?>
                           <div class="logo"> <a href="<?php echo home_url();?>"><img src="<?php  echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"></a>       </div>
                    <?php endif; ?>
                        <div class="hotel">
                            <h2><?php echo get_field('hotel_in_style_heading','option'); ?> </h2>
                   
                            <p><?php echo get_field('hotel_in_style_description','option'); ?> </p>
                        </div>
                        <div class="book">
             				<h4><?php echo get_field('booking_rooms_heading','option'); ?></h4>
                            <a href="#book_in_one_click_pop_up" class="open-popup-link" ><?php echo get_field('booking_rooms_heading_text_in_button','option'); ?> </a>
                        </div>
                        <div id="book_in_one_click_pop_up" class="book_form_in_one_click_pop_up mfp-hide">
                        <div class="book_form_in_one_click">
                              <?php echo do_shortcode('[contact-form-7 id="502" title="Форма быстрой бронировки комнат"]'); ?>
                        </div>
                        </div>
                        <div class="phones">
                            <div class="phone_first">
                                <a href="tel:<?php echo get_field('phone_first','option'); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/icon_phone_first.png" alt=""><?php echo get_field('phone_first','option'); ?></a>
                            </div>
                            <div class="phone_second">
                                <a href="tel:<?php echo get_field('phone_second','option'); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/icon_phone_second.png" alt=""><?php echo get_field('phone_second','option'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
     