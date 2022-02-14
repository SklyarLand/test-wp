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
define( 'DB_NAME', 'test-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FB}(N90o/wq/q,J{R%?VuRsR?Y6L:yx5u8+43_$slR~JrV>Slh8mhmJGG~Xfbz1L' );
define( 'SECURE_AUTH_KEY',  'RuX,#huoVkk?rQh:A(f{E9AGGz6I:[sCrJc`$u[NC(uRO#6IMdxm W`^Je&Js;gR' );
define( 'LOGGED_IN_KEY',    'jO@aO@`hNo;NGGN.>|6}fxcIa N.x,/!3 7IZ%h#nxx%pV08)BcG:{ XD>tO+@27' );
define( 'NONCE_KEY',        't1u}yfdiJ+`cS~kQ!.u+JMunB]7^Mm+ZckHAaCi5E~UP=(*vim9O>bP7|?5lcxgY' );
define( 'AUTH_SALT',        '-9f- &o/c)Sb^?F^HSw2)fd;*X!agwh` ^zz7V7X0c<I*IrTtHfHLl?_Rq^0xldc' );
define( 'SECURE_AUTH_SALT', ']lQ}L-2vI-Tkzd`<Df;fxiEn#rKC2h_C4Jk`x?8w@6bVLJ_W7S`TWxQcrj*~f[uW' );
define( 'LOGGED_IN_SALT',   'wl9IwS% 5{^>Y$sK0bsV93ei8xNLfO0g>I]N@Z[B~r}##8vchAg:T^R?&)XnJh?D' );
define( 'NONCE_SALT',       'L?7Q,&^iqOHtC>%;6u%R)hc5Fd=-4_=Vj$sLP&pOfQ#$%vw^Bw]DL#^pOlU-}f7F' );

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
define( 'WP_DEBUG_LOG', WP_DEBUG );
define( 'WP_DEBUG_DISPLAY', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
