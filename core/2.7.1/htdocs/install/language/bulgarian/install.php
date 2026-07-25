<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: bg
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Показване/скриване на текста за помощ');
// License
//define('LICENSE_NOT_WRITEABLE', 'Лицензионният файл "%s" НЕ може да се записва!');
//define('LICENSE_IS_WRITEABLE', '%s Лицензът може да се записва.');
// Configuration check page
define('SERVER_API', 'API на сървъра');
define('PHP_EXTENSION', '%s разширение');
define('CHAR_ENCODING', 'Кодиране на символи');
define('XML_PARSING', 'XML парсиране');
define('REQUIREMENTS', 'Изисквания');
define('_PHP_VERSION', 'PHP версия');
define('RECOMMENDED_SETTINGS', 'Препоръчани настройки');
define('RECOMMENDED_EXTENSIONS', 'Препоръчани разширения');
define('SETTING_NAME', 'Ime на настройката');
define('RECOMMENDED', 'Препоръчано');
define('CURRENT', 'Текущо');
define('RECOMMENDED_EXTENSIONS_MSG', 'Тези разширения не са необходими за нормална употреба, но може да са необходими за изследване
 на някои специфични функции (като многоезична или RSS поддръжка). Затова е препоръчително те да бъдат инсталирани.');
define('NONE', 'Никой');
define('SUCCESS', 'Успех');
define('WARNING', 'Предупреждение');
define('FAILED', 'Неуспешно');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Съветник за инсталиране на XOOPS');
define('LANGUAGE_SELECTION', 'Избор на език');
define('LANGUAGE_SELECTION_TITLE', 'Изберете вашия език');        // L128
define('INTRODUCTION', 'Въведение');
define('INTRODUCTION_TITLE', 'Добре дошли в XOOPS Съветника за инсталиране');        // L0
define('CONFIGURATION_CHECK', 'Проверка на конфигурацията');
define('CONFIGURATION_CHECK_TITLE', 'Проверка на конфигурацията на сървъра');
define('PATHS_SETTINGS', 'Настройки на пътищата');
define('PATHS_SETTINGS_TITLE', 'Настройки на пътищата');
define('DATABASE_CONNECTION', 'Връзка с база данни');
define('DATABASE_CONNECTION_TITLE', 'Връзка с база данни');
define('DATABASE_CONFIG', 'Конфигурация на базата данни');
define('DATABASE_CONFIG_TITLE', 'Конфигурация на базата данни');
define('CONFIG_SAVE', 'Запазване на конфигурацията');
define('CONFIG_SAVE_TITLE', 'Запазване на вашата системна конфигурация');
define('TABLES_CREATION', 'Създаване на таблици');
define('TABLES_CREATION_TITLE', 'Създаване на таблиците на базата данни');
define('INITIAL_SETTINGS', 'Начални настройки');
define('INITIAL_SETTINGS_TITLE', 'Моля, въведете първоначалните си настройки');
define('DATA_INSERTION', 'Вмъкване на данни');
define('DATA_INSERTION_TITLE', 'Запазване на вашите настройки в базата данни');
define('WELCOME', 'Добре дошли');
define('WELCOME_TITLE', 'Добре дошли във вашия сайт XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Физически пътища на XOOPS');
define('XOOPS_URLS', 'Уеб местоположения');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS документи корен физически път');
define('XOOPS_ROOT_PATH_HELP', 'Физически път до директорията с документи XOOPS (обслужвани) БЕЗ наклонена черта в края');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS библиотечна директория');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS директория с файлове с данни');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Местоположение на уебсайта (URL)'); // L56
define('XOOPS_URL_HELP', 'Основен URL, който ще се използва за достъп до вашата XOOPS инсталация'); // L58
define('LEGEND_CONNECTION', 'Връзка със сървъра');
define('LEGEND_DATABASE', 'База данни'); // L51
define('DB_HOST_LABEL', 'Хост на сървъра');    // L27
define('DB_HOST_HELP', 'Име на хост на сървъра на базата данни. Ако не сте сигурни, <em>localhost</em> работи в повечето случаи'); // L67
define('DB_USER_LABEL', 'Потребителско ime');    // L28
define('DB_USER_HELP', 'Име на потребителския акаунт, който ще се използва за свързване към сървъра на базата данни'); // L65
define('DB_PASS_LABEL', 'Парола');    // L52
define('DB_PASS_HELP', 'Парола на вашия потребителски акаунт в базата данни'); // L68
define('DB_NAME_LABEL', 'Ime на базата данни');    // L29
define('DB_NAME_HELP', 'Името на базата данни на хоста. Инсталаторът ще се опита да създаде базата данни, ако не съществува'); // L64
define('DB_CHARSET_LABEL', 'Набор от знаци на базата данни');
define('DB_CHARSET_HELP', 'MySQL включва поддръжка на набор от знаци, която ви позволява да съхранявате данни, като използвате различни набори от знаци и да извършвате сравнения според различни съпоставки.');
define('DB_COLLATION_LABEL', 'Колация на базата данни');
define('DB_COLLATION_HELP', 'Подреждането е набор от правила за сравняване на знаци в набор от знаци.');
define('DB_PREFIX_LABEL', 'Префикс на таблицата');    // L30
define('DB_PREFIX_HELP', 'Този префикс ще бъде добавен към всички нови таблици, създадени, за да се избегнат конфликти на имена в базата данни. Ако не сте сигурни, просто запазете стойността по подразбиране'); // L63
define('DB_PCONNECT_LABEL', 'Използване на постоянна връзка');    // L54
define('DB_PCONNECT_HELP', "По подразбиране е 'Не'. Оставете го празно, ако не сте сигурни"); // L69
define('DB_DATABASE_LABEL', 'База данни');
define('LEGEND_ADMIN_ACCOUNT', 'Администраторски акаунт');
define('ADMIN_LOGIN_LABEL', 'Вход на администратора'); // L37
define('ADMIN_EMAIL_LABEL', 'Имейл на администратора'); // L38
define('ADMIN_PASS_LABEL', 'Парола на администратора'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Потвърди паролата'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Предишен'); // L42
define('BUTTON_NEXT', 'Продължи'); // L47
// Messages
define('XOOPS_FOUND', '%s намерен');
define('CHECKING_PERMISSIONS', 'Проверка на разрешенията за файл и директория...'); // L82
define('IS_NOT_WRITABLE', '%s НЕ може да се записва.'); // L83
define('IS_WRITABLE', '%s може да се записва.'); // L84
define('XOOPS_PATH_FOUND', 'Пътят е намерен.');
//define('READY_CREATE_TABLES', 'Не бяха открити таблици XOOPS.<br>Инсталаторът вече е готов да създаде системните таблици XOOPS.');
define('XOOPS_TABLES_FOUND', 'Системните таблици XOOPS вече съществуват във вашата база данни.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS системни таблици са създадени.');
//define('READY_INSERT_DATA', 'Инсталаторът вече е готов да вмъкне първоначални данни във вашата база данни.');
//define('READY_SAVE_MAINFILE', 'Инсталаторът вече е готов да запише посочените настройки в <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Настройките са запазени');
define('SAVED_MAINFILE_MSG', 'Инсталаторът е запазил посочените настройки в <em>mainfile.php</em> и <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS данни намерени в базата данни.');
define('DATA_INSERTED', 'Началните данни са вмъкнати в базата данни.');
// %s is database name
define('DATABASE_CREATED', 'База данни %s е създадена!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Не може да се създаде таблица %s'); // L118
define('TABLE_CREATED', 'Таблица %s е създадена.'); // L45
define('ROWS_INSERTED', '%d записи са вмъкнати в таблица %s.'); // L119
define('ROWS_FAILED', 'Неуспешно вмъкване на %d записи в таблица %s.'); // L120
define('TABLE_ALTERED', 'Таблица %s е актуализирана.'); // L133
define('TABLE_NOT_ALTERED', 'Неуспешно актуализиране на таблица %s.'); // L134
define('TABLE_DROPPED', 'Таблица %s отпадна.'); // L163
define('TABLE_NOT_DROPPED', 'Неуспешно изтриване на таблица %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Няма достъп до посочената папка. Моля, проверете дали съществува и че е четим от сървъра.');
define('ERR_NO_XOOPS_FOUND', 'В посочената папка не може да бъде намерена инсталация на XOOPS.');
define('ERR_INVALID_EMAIL', 'Невалиден имейл'); // L73
define('ERR_REQUIRED', 'Информацията е задължителна.'); // L41
define('ERR_PASSWORD_MATCH', 'Двете пароли не съвпадат');
define('ERR_NEED_WRITE_ACCESS', 'Сървърът трябва да получи достъп за запис до следните файлове и папки<br>(т.е. <em>chmod 775 име_на_директория</em> на UNIX/LINUX сървър)<br>Ако не са налични или не са създадени правилно, моля, създайте ръчно и задайте правилни разрешения.');
define('ERR_NO_DATABASE', 'Не може да се създаде база данни. Свържете се с администратора на сървъра за подробности.'); // L31
define('ERR_NO_DBCONNECTION', 'Не може да се свърже с базата данни.'); // L106
define('ERR_WRITING_CONSTANT', 'Неуспешно записване на константа %s.'); // L122
define('ERR_COPY_MAINFILE', 'Не можа да копира файла за разпространение в %s');
define('ERR_WRITE_MAINFILE', 'Не може да се пише в %s. Моля, проверете разрешението за файла и опитайте отново.');
define('ERR_READ_MAINFILE', 'Не може да се отвори %s за четене');
define('ERR_INVALID_DBCHARSET', "Наборът от знаци '%s' не се поддържа.");
define('ERR_INVALID_DBCOLLATION', "Съпоставянето „%s“ не се поддържа.");
define('ERR_CHARSET_NOT_SET', 'Наборът знаци по подразбиране не е зададен за XOOPS база данни.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Поддръжка');
define('LOGIN', 'Удостоверяване');
define('LOGIN_TITLE', 'Удостоверяване');
define('USER_LOGIN', 'Вход на администратора');
define('USERNAME', 'Потребителско име:');
define('PASSWORD', 'Парола :');
define('ICONV_CONVERSION', 'Конвертиране на набор от знаци');
define('ZLIB_COMPRESSION', 'Zlib компресия');
define('IMAGE_FUNCTIONS', 'Функции за изображения');
define('IMAGE_METAS', 'Мета данни на изображението (exif)');
define('FILTER_FUNCTIONS', 'Функции за филтри');
define('ADMIN_EXIST', 'Администраторският акаунт вече съществува.');
define('CONFIG_SITE', 'Конфигурация на сайта');
define('CONFIG_SITE_TITLE', 'Конфигурация на сайта');
define('MODULES', 'Инсталиране на модули');
define('MODULES_TITLE', 'Инсталиране на модули');
define('THEME', 'Избери тема');
define('THEME_TITLE', 'Избери тема по подразбиране');
define('INSTALLED_MODULES', 'Следните модули са инсталирани.');
define('NO_MODULES_FOUND', 'Не са намерени модули.');
define('NO_INSTALLED_MODULES', 'Не е инсталиран нито един модул.');
define('THEME_NO_SCREENSHOT', 'Не е намерена екранна снимка');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Сила на паролата');
define('PASSWORD_DESC', 'Паролата не е въведена');
define('PASSWORD_GENERATOR', 'Генератор на пароли');
define('PASSWORD_GENERATE', 'Генерирай');
define('PASSWORD_COPY', 'Копирай');
define('PASSWORD_VERY_WEAK', 'Много слаба');
define('PASSWORD_WEAK', 'Слаба');
define('PASSWORD_BETTER', 'По-добре');
define('PASSWORD_MEDIUM', 'Средно');
define('PASSWORD_STRONG', 'Силна');
define('PASSWORD_STRONGEST', 'Най-силна');
//2.5.7
define('WRITTEN_LICENSE', 'Написа XOOPS %s Лицензионен ключ: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Опитай отново');
define('CHMOD_CHGRP_IGNORE', 'Използвай въпреки всичко');
define('CHMOD_CHGRP_ERROR', 'Инсталаторът може да не успее да запише конфигурационния файл %1$s.<p>PHP записва файлове под потребител %2$s и група %3$s.<p>Директорията %4$s/ има потребител %5$s и група %6$s');
//2.5.9
define("CURL_HTTP", "Клиентска URL библиотека (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Домейн на бисквитки за уебсайта');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Домейн за задаване на бисквитки. Може да е празно, пълният хост от URL (www.example.com) или регистрираният домейн без поддомейни (example.com) за споделяне между поддомейни (www.example.com и blog.example.com.)');
define('INTL_SUPPORT', 'Функции за интернационализация');
define('XOOPS_SOURCE_CODE', "XOOPS на GitHub");
define('XOOPS_INSTALLING', 'Инсталиране');
define('XOOPS_ERROR_ENCOUNTERED', 'Грешка');
define('XOOPS_ERROR_SEE_BELOW', 'Вижте по-долу за съобщения.');
define('MODULES_AVAILABLE', 'Налични модули');
define('INSTALL_THIS_MODULE', 'Добавяне на %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Не можа да копира конфигурационния файл %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Сайт');
define('_WEBSITE_SLOGAN', 'Просто го използвайте!');
define('_WEBSITE_META_KEYWORDS', 'xoops, рамка за уеб приложения, cms, система за управление на съдържанието');
define('_WEBSITE_FOOTER', "Осъществено от XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Проектът XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Авторско право © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS е динамичен обектно-ориентиран портален скрипт с отворен код, написан на PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'УППС');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
