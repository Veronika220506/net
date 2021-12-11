<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'u3677576_net' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u3677576_net' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'nikusia220506' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eF=2IsnVa~:2xEOedwu#|WQqQ3nj+J3ZQ(b%L~}?GRmnK# HJuvYI,(FDNzGe{M]' );
define( 'SECURE_AUTH_KEY',  ')0*oca|:;MDJP&p|[8[YvWs|,%&Ch&aWmQ:]o-4n9l8#7m]N+je)<ahbIZ9I9 >L' );
define( 'LOGGED_IN_KEY',    'e#l~h~j4(r%rL&(nl=g~ERU.,}I}Zb4AZ*y?G E5I6GBv|T>:g|5[JUZ9:RDv/D_' );
define( 'NONCE_KEY',        '[%A/,f<gI|kig^,PBpJlM>jO8~xZJh5tk9B{;LR4VtVj(SM77,{C_=#/KTk88s),' );
define( 'AUTH_SALT',        'S5UIVd-TB<fbudq:vkP6i}HDw0Ds`?1lCVbL!qo$WA]=to_T#tT=5:(#s<PWbp@o' );
define( 'SECURE_AUTH_SALT', '~k$)5JrEJ)[*Uq[gea_N_.Qh~AEGt$K%=w~:E2zH%r~ZI)N@<]zI!m;$9TJQq$qS' );
define( 'LOGGED_IN_SALT',   'F,`$c48c_cDmUZ=K;jew(CVE,!UG*pCi4Q7ns]8Y ;yZ>!1La)}qV`e6UFJ[??`e' );
define( 'NONCE_SALT',       'pvK(Y,l*1-04;PE^ub`>b/`a{phE)/u=+EjrOz`&uhN.aml)e`i6<Wu:+TP>}<iS' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
