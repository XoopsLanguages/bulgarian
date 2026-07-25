<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: bg

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Отчитане на грешки и анализ на производителността с PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Показване на DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Активирай Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Активирай раздел за включени файлове');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Покажи всички PHP файлове, заредени по време на заявката');
define('_MI_DEBUGBAR_SLOWQUERY', 'Праг на бавна заявка (секунди)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Заявките по-бавни от това се маркират в червено (напр. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Записване на заявки');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Показване на всички заявки или само бавни заявки и грешки');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Всички заявки');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Само бавни и грешки');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Активирай интеграция с Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Изпращане на дебъг данни към Ray (изисква spatie/ray)');

define('_MI_DEBUGBAR_ADMENU1', 'Начало');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Относно');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Назад към администрацията на ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Преглед');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Отказ от отговорност');
\define('_MI_DEBUGBAR_LICENSE', 'Лиценз');
\define('_MI_DEBUGBAR_SUPPORT', 'Поддръжка');
