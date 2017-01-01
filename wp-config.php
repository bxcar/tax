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
define('DB_NAME', 'tax_base');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1;p~r!f}GX`)r/%6#mN%Th|ov45J[R+:Z_]z8A%JWPh~I7YS4z$y49k^SN6(zhA-');
define('SECURE_AUTH_KEY',  'lnU?Cq3|F$i94pVb:%WO:m92|^oY{=)sUV6`T<+d/$E/[uf MZnj#h#|C/,3[Hp4');
define('LOGGED_IN_KEY',    ' EWy>ouEta9,v%4x/&Q8VT:L|@D2i&ji1;Pc`Pj4U5M]rd/>S*Hw?``h8R<u+Ky!');
define('NONCE_KEY',        'Z,&Do!ep!niC_-fjpRy s)(?[}hYy=MSvM:q{*cF$Gm8In8,OIJ7-o#Iva2S>E|5');
define('AUTH_SALT',        'm~zG?P36W$gTa5ZhA)zX`{yV;495hM:Y,eylj@91CS#_{a*kQwlRskNVOfi8:^Kr');
define('SECURE_AUTH_SALT', 'U_PHOI Ea=.{v2!n{kAS$RTft1P~GV8tZEYv@3Pu&-[V1C&?0D27>8*0Zb$x9+rT');
define('LOGGED_IN_SALT',   'V_([++o*_lFmMn1Goz^Vc!dd&XGINq:^cpD>g@Cgr|;:)[n7PdF4dJ05TSGIb]Yl');
define('NONCE_SALT',       'y.s1(9;;z~V,Qa?qy%bCzQf]o+6Y9xM{9u6*4av-YDZTc^fMoj26[9ZZ%RaBBF5b');

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

define( 'WP_HOME', 'http://192.168.0.98'); //101
define( 'WP_SITEURL', 'http://192.168.0.98');
