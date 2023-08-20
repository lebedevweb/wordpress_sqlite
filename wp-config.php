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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'default-db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'default-db' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '$W@n280113611' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'ustuyaljig.beget.app' );

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
define( 'AUTH_KEY',         'iZ@[o3i[0<7#~pv{R|GS~2r>dK:v2AX6-R,By|-$$&|y|k4Zd01*jw8^%$Qwmu}V' );
define( 'SECURE_AUTH_KEY',  ';I%VG]0]br0T.  ?I5CIeBt<ECM3#ZA-D0J&-W1=] x,kvB1=[xWr/LemEw?G R<' );
define( 'LOGGED_IN_KEY',    'dRg(=~PAeUf-B+7Jmvsk2%4FGn/=!H%R!8H`!!| 8n/^a~sC/+3LYq AkT=TNRa5' );
define( 'NONCE_KEY',        '/E7w1vnI,8$}8,s45j<K9EId][7*,EaV7iXNq!u>8XF;exS5SuUY(=UK@> 4z<*C' );
define( 'AUTH_SALT',        '4TK+3dwF(Ax2yal-F04&.r}zKI&Gx]!??t%t@Q_hY4Y7breEL3O7d4.~XC5|!@PV' );
define( 'SECURE_AUTH_SALT', '6l=Wr<k2r6Elq_LT*MuJ_,OsK&j/l22#y^Hl2/TV3_`=Dcw2 ^!pEuCV=q.d,K<Q' );
define( 'LOGGED_IN_SALT',   'U#o/EFW7=*#2DNF%2z+=# =I8RIYV i{-0a;*/>iY55^`R]jQ-M?<m8;4fbq^BpV' );
define( 'NONCE_SALT',       'Pf^D6 4R54wAL q:f7P^$r+4`|_z k4E,5i;]!g#,,j%~;_xcE@P%B2qo;=T{H#@' );

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
