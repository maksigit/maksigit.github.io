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
define('DB_NAME', 'eli_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '4656365');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'c9I*fV|9lx<sM1oFfXy(P]yPmJE?DVE/hr>~VOKlHJr:d8DEx}$}{I6f`?^D!y8V');
define('SECURE_AUTH_KEY',  '4iBRbVXQ9C[y%(C|P4{yq]n/T$lmQH9-&$9`z+J&~Iw+PmWyJX<YO^hv4xcDgL0E');
define('LOGGED_IN_KEY',    'WG}&|n>eduPq1$ !M=P@0BQ^AAc_=RD*l||i)8Y2zZKNBo-#ZB0h,YJW @(HE;5.');
define('NONCE_KEY',        '1|*bT]|gzKgNN@,`d$q: nu_}T#X$7?^qmHvRDV(yO&|TzzJ< i *{mMbLA2?iU~');
define('AUTH_SALT',        '!hy?,t,/Ikk))4|e;o8m[p-d`W+41zXl%<y2]X`ptlUnnJIO(nMQFEND4h;TG4 B');
define('SECURE_AUTH_SALT', 'L;_:@FNX)%s?JVUo|$00P41!|%<O3PS0vXSn;d7RSBnm~i/(dIN,ly#emq;$,=<9');
define('LOGGED_IN_SALT',   'cl.&I6Qi&I6cJ1zoS*#iRCrn0FB$[7h)_r9yO4H>c;v~TSlSJ8 O-OZn<zNA S{3');
define('NONCE_SALT',       'yrIoi:I!+-uOq^NYLD2?Kdw{pNzwKttwH_rC{3fdg$_IoI5,l+<6AKx| 8xpfB=K');

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

define('FS_METHOD','direct');
