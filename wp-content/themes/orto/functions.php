<?php
/*______ADD SUPPORT______*/

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );


add_image_size( 'thumbnail_360_205', 360,205, true );
add_image_size( 'thumbnail_137_137', 137,137, true );
add_image_size( 'thumbnail_600_400', 600,400, true );

	/*______ADD SUPPORT END______*/
/*______MENU______*/

add_action('after_setup_theme', function(){
  register_nav_menus( array(
    'header_menu' => 'Меню в шапке',
    'tabs_menu' => 'Меню табы на главной',
    'tabs_page_menu' => 'Меню табы на внутреней',
    'footer_menu' => 'Меню в футере',
  ) );
});
/*______MENU END______*/
/*______ADD SCRIPT STYLE______*/
add_action( 'wp_enqueue_scripts', 'style_and_scripts' );

function style_and_scripts(){
  wp_enqueue_script('jquery_js','https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');
  wp_enqueue_script('jquery-ui_js', get_template_directory_uri() . '/js/jquery-ui.min.js');
  wp_enqueue_script('jquery_maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js');
  wp_enqueue_style('jquery_ui_css', get_template_directory_uri() . '/css/jquery-ui.structure.min.css');
  wp_enqueue_style('jquery_ui_theme_css', get_template_directory_uri() . '/css/jquery-ui.theme.min.css');
  wp_enqueue_script( 'google_map','https://maps.googleapis.com/maps/api/js?key=AIzaSyB-40a39g7GjvsLNbBeXZ_M25q4HgU9Epo');
  wp_enqueue_style('slick_css', get_template_directory_uri() . '/css/slick.css');
  wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.min.js');
  wp_enqueue_style('magnific_css', get_template_directory_uri() . '/css/magnific-popup.css');
  wp_enqueue_script('magnific_js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js'); 
  wp_enqueue_style('bxslider_css', get_template_directory_uri() . '/css/jquery.bxslider.css');
  wp_enqueue_script('bxslider_js', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
  wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.min.js');
  wp_enqueue_script('cookie_js', get_template_directory_uri() . '/js/jquery.cookie.js');
	wp_enqueue_script( 'es5_shim', get_template_directory_uri() . '/js/es5-shim.min.js');
	wp_enqueue_script( 'html5shiv_printshiv', get_template_directory_uri() . '/js/html5shiv-printshiv.min.js');
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_style('font-awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css');  
  wp_enqueue_style('style', get_stylesheet_uri()); 
 	wp_localize_script('main', 'ajax', array('url' => admin_url('admin-ajax.php'),'nonce' => wp_create_nonce('myajax-nonce')));  

}
/*______ADD SCRIPT STYLE END______*/
/*________ADD OPTION PAGE___________*/

if( function_exists('acf_add_options_page') ) {
  
    acf_add_options_page(array(
    'page_title'  => 'Опции темы',
    'menu_title'  => 'Опции темы',
    'menu_slug'   => 'theme-option',
    'capability'  => 'edit_posts',
    'redirect'    => true,

  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Шапка',
    'menu_title'  => 'Шапка',
    'parent_slug' => 'theme-option',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Футер',
    'menu_title'  => 'Футер',
    'parent_slug' => 'theme-option',
   ));
}

/*________ADD OPTION PAGE END___________*/

/*________ADD GOOGLE MAP KEY ___________*/

function my_acf_google_map_api( $api ){
  
  $api['key'] = 'AIzaSyB-40a39g7GjvsLNbBeXZ_M25q4HgU9Epo';
  
  return $api;
  
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/*________ADD GOOGLE MAP KEY END ___________*/



/*________ADD CUSTOME POST TYPE___________*/

add_action( 'init', 'slider' );
function slider() {
  register_post_type( 'slider',
    array(
      'labels' => array(
        'name' => __( 'Слайдер' ),
        'singular_name' => __( 'Слайдер' )
      ),
      'public' => true,
      'supports'   => array('title','editor','thumbnail')
    )
  );
}


 add_action('init', 'slider_taxonomy');
 function slider_taxonomy(){
   $labels = array(
        'name' => __( 'Рубрики слайдеров' ),
        'singular_name' => __( 'Рубрики слайдеров' )
  ); 
 $args = array(
    'label'                 => 'Рубрики слайдеров',
   'labels'            => $labels,
    'public'                => true,
    'meta_box_cb'           => 'post_categories_meta_box',
    'hierarchical'      => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,

  );
  register_taxonomy('slider_taxonomy', array('slider'), $args );
}
/*________ADD CUSTOME POST TYPE END___________*/


/*________ADD CUSTOME POST TYPE___________*/

add_action( 'init', 'gallery' );
function gallery() {
  register_post_type( 'gallery',
    array(
      'labels' => array(
        'name' => __( 'Галереи' ),
        'singular_name' => __( 'Галереи' )
      ),
      'public' => true,
      'supports'   => array('title')
    )
  );
}
 


/*________ADD CUSTOME POST TYPE END___________*/


/*________ADD CUSTOME POST TYPE SHARES ___________*/

add_action( 'init', 'shares' );
function shares() {
  register_post_type( 'shares',
    array(
      'labels' => array(
        'name' => __( 'Акции' ),
        'singular_name' => __( 'Акции' )
      ),
      'public' => true,
      'supports'=> array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'), // 
    )
  );
}
 


/*________ADD CUSTOME POST TYPE END___________*/

/*________ADD CUSTOME POST TYPE REVIEWS___________*/

add_action( 'init', 'reviews' );
function reviews() {
  register_post_type( 'reviews',
    array(
      'labels' => array(
        'name' => __( 'Отзывы' ),
        'singular_name' => __( 'Отзывы' )
      ),
      'public' => true,
      'supports'=> array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'), // 
    )
  );
}
 

 add_action('init', 'reviews_taxonomy');
 function reviews_taxonomy(){
   $labels = array(
        'name' => __( 'Рубрики отзывов' ),
        'singular_name' => __( 'Рубрики отзывов' )
  ); 
 $args = array(
    'label'                 => 'Рубрики отзывов',
   'labels'            => $labels,
    'public'                => true,
    'meta_box_cb'           => 'post_categories_meta_box',
    'hierarchical'      => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,

  );
  register_taxonomy('reviews_taxonomy', array('reviews'), $args );
}



/*________ADD CUSTOME POST TYPE REVIEWS END___________*/



/*________ADD PAGINATION___________*/


function wp_pagenavi( $before = '', $after = '', $echo = true, $args = array(), $wp_query = null ) {
  if( ! $wp_query ){
    wp_reset_query();
    global $wp_query;
  }

  // параметры по умолчанию
  $default_args = array(
    'text_num_page'   => '', // Текст перед пагинацией. {current} - текущая; {last} - последняя (пр. 'Страница {current} из {last}' получим: "Страница 4 из 60" )
    'num_pages'       => 5, // сколько ссылок показывать
    'step_link'       => 10, // ссылки с шагом (значение - число, размер шага (пр. 1,2,3...10,20,30). Ставим 0, если такие ссылки не нужны.
    'dotright_text'   => '…', // промежуточный текст "до".
    'dotright_text2'  => '…', // промежуточный текст "после".
    'back_text'       => '', // текст "перейти на предыдущую страницу". Ставим 0, если эта ссылка не нужна.
    'next_text'       => '', // текст "перейти на следующую страницу". Ставим 0, если эта ссылка не нужна.
  );

  $default_args = apply_filters('kama_pagenavi_args', $default_args ); // чтобы можно было установить свои значения по умолчанию

  $args = array_merge( $default_args, $args );

  extract( $args );

  $posts_per_page = (int) $wp_query->query_vars['posts_per_page'];
  $paged          = (int) $wp_query->query_vars['paged'];
  $max_page       = $wp_query->max_num_pages;

  //проверка на надобность в навигации
  if( $max_page <= 1 )
    return false; 

  if( empty( $paged ) || $paged == 0 ) 
    $paged = 1;

  $pages_to_show = intval( $num_pages );
  $pages_to_show_minus_1 = $pages_to_show-1;

  $half_page_start = floor( $pages_to_show_minus_1/2 ); //сколько ссылок до текущей страницы
  $half_page_end = ceil( $pages_to_show_minus_1/2 ); //сколько ссылок после текущей страницы

  $start_page = $paged - $half_page_start; //первая страница
  $end_page = $paged + $half_page_end; //последняя страница (условно)

  if( $start_page <= 0 ) 
    $start_page = 1;
  if( ($end_page - $start_page) != $pages_to_show_minus_1 ) 
    $end_page = $start_page + $pages_to_show_minus_1;
  if( $end_page > $max_page ) {
    $start_page = $max_page - $pages_to_show_minus_1;
    $end_page = (int) $max_page;
  }

  if( $start_page <= 0 ) 
    $start_page = 1;

  //выводим навигацию
  $out = '';

  // создаем базу чтобы вызвать get_pagenum_link один раз
  $link_base = str_replace( 99999999, '___', get_pagenum_link( 99999999 ) );
  $first_url = get_pagenum_link( 1 );
  if( false === strpos( $first_url, '?') )
    $first_url = user_trailingslashit( $first_url );

  $out .= $before . "<div class='wp-pagenavi'>\n";

    if( $text_num_page ){
      $text_num_page = preg_replace( '!{current}|{last}!', '%s', $text_num_page );
      $out.= sprintf( "<span class='pages'>$text_num_page</span> ", $paged, $max_page );
    }
    // назад
    if ( $back_text && $paged != 1 ) 
      $out .= '<a class="prev" href="'. ( ($paged-1)==1 ? $first_url : str_replace( '___', ($paged-1), $link_base ) ) .'">'. $back_text .'</a> ';
    // в начало
    if ( $start_page >= 2 && $pages_to_show < $max_page ) {
      $out.= '<a class="first" href="'. $first_url .'">'. ( $first_page_text ? $first_page_text : 1 ) .'</a> ';
      if( $dotright_text && $start_page != 2 ) $out .= '<span class="extend">'. $dotright_text .'</span> ';
    }
    // пагинация
    for( $i = $start_page; $i <= $end_page; $i++ ) {
      if( $i == $paged )
        $out .= '<span class="current">'.$i.'</span> ';
      elseif( $i == 1 )
        $out .= '<a href="'. $first_url .'">1</a> ';
      else
        $out .= '<a href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a> ';
    }

    //ссылки с шагом
    $dd = 0;
    if ( $step_link && $end_page < $max_page ){
      for( $i = $end_page+1; $i<=$max_page; $i++ ) {
        if( $i % $step_link == 0 && $i !== $num_pages ) {
          if ( ++$dd == 1 ) 
            $out.= '<span class="extend">'. $dotright_text2 .'</span> ';
          $out.= '<a href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a> ';
        }
      }
    }


  $out .= "</div>". $after ."\n";

  $out = apply_filters('kama_pagenavi', $out );

  if( $echo )
    return print $out;

  return $out;
}


/*________ADD PAGINATION END___________*/
/*________EXERPT___________*/
add_filter('excerpt_more', function($more) {
  return '...';
});

/*________EXERPT END___________*/