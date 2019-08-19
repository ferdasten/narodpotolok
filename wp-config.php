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
define( 'DB_NAME', 'narodpotolok' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H$a5zpc9->/vUl!DcLHV)>siX,xw9fY(#!%<tEu~H#5zI~P%}n}MdB~vm6i;)ldf' );
define( 'SECURE_AUTH_KEY',  'huGI1ve_qxOu([c91hYayC`)WTsvjVBf0@|vPF~N2GR~<&&6WiBauM)3WNB{hsCu' );
define( 'LOGGED_IN_KEY',    ',ilU]bO%ZNOF9lOocGR6g53Wpbwi.a[&X+!,Db~nTncvLrNe:Vf-ozI/&.!iZ_a6' );
define( 'NONCE_KEY',        'l+ow>Md9F*H/xYMC]q,.9RxOkhIYA|Lj{)(^1;A0qt<?194QkTvJSrQMirF5<&gX' );
define( 'AUTH_SALT',        'G_N,vtn%n@n>,CJBC)V##@YqSuyO-|s32B~ g6Xmf{QI:EIFJu%7adl7DpyjKX:$' );
define( 'SECURE_AUTH_SALT', '|8m&d5:Me< kOf!/dK-W.,?}ZG=Uew?iYx-<c470fbA1Py ]DiTr1ruku;cA$(WU' );
define( 'LOGGED_IN_SALT',   '8[:4+tF3BS~TTUUY>h,Xc~;8k@g?CLJpY@gs=cG ]`E<?S~fo}(MHn%;xWpV;*%(' );
define( 'NONCE_SALT',       'bK`.8V2[&2sLz&u409@V2s@|Q=>H?_+LpD?jAoUff84FHxM{V|C{S~9rS1A]3B0q' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
