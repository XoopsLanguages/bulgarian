<?php
// _LANGCODE: bg
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Физически пътища на XOOPS');
define('LEGEND_DATABASE', 'Набор от символи на база данни');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS библиотечна директория');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS директория с файлове с данни');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Набор от символи и сортиране на базата данни');
define('DB_COLLATION_HELP', "От 4.12 MySQL поддържа персонализиран набор от знаци и сортиране. Въпреки това е по-сложен от очакваното, така че НЕ правете никакви промени, освен ако не сте уверени в избора си.");
define('DB_COLLATION_NOCHANGE', 'Не променяй');

define('XOOPS_PATH_FOUND', 'Пътят е намерен.');
define('ERR_COULD_NOT_ACCESS', 'Няма достъп до посочената папка. Моля, проверете дали съществува и че е четим от сървъра.');
define('CHECKING_PERMISSIONS', 'Проверка на разрешенията за файл и директория...');
define('ERR_NEED_WRITE_ACCESS', 'Сървърът трябва да получи достъп за запис до следните файлове и папка<br>(т.е. <em>chmod 777 име_на_директория</em> на UNIX/LINUX сървър)');
define('IS_NOT_WRITABLE', '%s НЕ може да се записва.');
define('IS_WRITABLE', '%s може да се записва.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Грешка при запис на съдържание в mainfile.php, запишете съдържанието в mainfile.php ръчно.');
