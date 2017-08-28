<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
define('DB_NAME', 'hotelortodoydu');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eh$Q>!/C?%$31|kP<?;FrrBjjM-SdR:I%pE<jQD!(~_{=1Rb7r+[_5h#&a@+0MuZ');
define('SECURE_AUTH_KEY',  '>(492X:(`y**ql#yW1O(Tsl6g^2g[27C)un5d}mEHqxZm)w.MLz~{@9y|m=5S aT');
define('LOGGED_IN_KEY',    'Yo1D.5Iaebx0P# 5_|MJcf=%>5fqN{*n9/[ 7 {)T zAbFd ]jD1Pc&aBoG=]GN6');
define('NONCE_KEY',        '2|@[Rm8$$|3~~}n32M@)S,5i~8Z45YZMJlQ.)mHVfAwoys^VeDI[y4rg*[Q=N[-L');
define('AUTH_SALT',        '~CI{-=zPDuY^:ju%:&X6+j}?)?+-*ah6-xu%>fFc_I1E8pc{y%13=oc [O?o}vjs');
define('SECURE_AUTH_SALT', '2;yG3%V<6>:65~~sG/v7UFx] y*_NcF&~^?>{V!eg&6sXd/K^B@JP$1,:Ji{1At<');
define('LOGGED_IN_SALT',   '}E,{>B23kNJhBoRmyX*cibQMXkb2V)ss,3goeZ~5Jcb+r#s`jL5>mlL%$bfv7j>/');
define('NONCE_SALT',       'aSV:*{04})EzQ298bm{LV0x#Hy6G|ws*E(l$sN_tL)##.z+K,P)EA^8QS9 w2mvE');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
