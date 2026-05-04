<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: bg

define('_MD_DEBUGBAR_DEBUG', 'Дебъг');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Включени файлове');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP версия');
define('_MD_DEBUGBAR_NONE', 'Няма');
define('_MD_DEBUGBAR_ERRORS', 'Грешки');
define('_MD_DEBUGBAR_DEPRECATED', 'Остаряло');
define('_MD_DEBUGBAR_QUERIES', 'Заявки');
define('_MD_DEBUGBAR_BLOCKS', 'Блокове');
define('_MD_DEBUGBAR_EXTRA', 'Допълнително');
define('_MD_DEBUGBAR_TIMERS', 'Таймери');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s зареди за %s секунди.');
define('_MD_DEBUGBAR_TOTAL', 'Общо');
define('_MD_DEBUGBAR_NOT_CACHED', 'Не е кеширано');
define('_MD_DEBUGBAR_CACHED', 'Кеширано (регенерира се на всеки %s секунди)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(празен низ)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool ВЯРНО');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Заявки към базата данни');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Използване на паметта');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d заявки');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d дубликати)');
define('_MD_DEBUGBAR_BYTES', '%s байта');
define('_MD_DEBUGBAR_DB_VERSION', '%s версия');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Номер на грешка: %s Съобщение за грешка: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Грешка #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Изключение');
define('_MD_DEBUGBAR_RAY_QUERY', 'Заявка #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'БАВНО');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Блокиране (кеширани %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Блокиране (не е кеширано)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Дъмп');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Контекст на шаблона');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(няма шаблонни променливи)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d променливи)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Директорията „modules/debugbar/%s“ не е създадена');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Неуспешно създаване на директория „%s“ по време на копиране на актив');
