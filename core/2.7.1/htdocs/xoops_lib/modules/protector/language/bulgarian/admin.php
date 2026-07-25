<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Разрешения');
define('_MD_A_MYMENU_MYPREFERENCES','Предпочитания');
// index.php
define('_AM_TH_DATETIME', 'Час');
define('_AM_TH_USER', 'Потребител');
define('_AM_TH_IP', 'IP');
define('_AM_TH_АГЕНТ', 'AGENT');
define('_AM_TH_TYPE', 'Тип');
define('_AM_TH_DESCRIPTION', 'Описание');
define('_AM_TH_BADIPS','Лоши IP адреси<br><br><span style="font-weight:normal;">Напишете всеки IP ред<br>празен означава, че всички IP адреси са разрешени</span>');
define('_AM_TH_GROUP1IPS','Разрешени IP адреси за група=1<br><br><span style="font-weight:normal;">Напишете всеки IP ред.<br>192.168. означава 192.168.*<br>празно означава, че всички IP адреси са разрешени</span>');
define('_AM_LABEL_COMPACTLOG', 'Компактен дневник');
define('_AM_BUTTON_COMPACTLOG', 'Компактирай!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Дублираните (IP, Тип) записи ще бъдат премахнати');
define('_AM_LABEL_REMOVEALL', 'Премахване на всички записи');
define('_AM_BUTTON_REMOVEALL', 'Премахни всички!');
define('_AM_JS_REMOVEALLCONFIRM', 'Всички регистрационни файлове се премахват абсолютно. наистина ли си добре');
define('_AM_LABEL_REMOVE', 'Премахнете проверените записи:');
define('_AM_BUTTON_REMOVE', 'Премахни!');
define('_AM_JS_REMOVECONFIRM', 'Премахване OK?');
define('_AM_MSG_IPFILESUPDATED', 'Файловете за IP са актуализирани');
define('_AM_MSG_BADIPSCANTOPEN', 'Файлът за лошо IP не може да бъде отворен');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Файлът за разрешаване на група=1 не може да бъде отворен');
define('_AM_MSG_REMOVED', 'Записите са премахнати');
define('_AM_MSG_DELFAILED', 'Неуспешно изтриване на записи');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Превърнете директорията с конфигурации в възможност за запис: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Мениджър на префикси');
define('_AM_MSG_DBUPDATED', 'Базата данни е актуализирана успешно!');
define('_AM_CONFIRM_DELETE', 'Всички данни ще бъдат премахнати. добре?');
define('_AM_TXT_HOWTOCHANGEDB',"Ако искате да промените префикса,<br> редактирайте %s/data/secure.php ръчно.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Не е сигурно');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Ако можете да видите изображение -NG- или връзката връща нормална страница, вашият XOOPS_TRUST_PATH не е поставен правилно. Най-доброто място за XOOPS_TRUST_PATH е извън DocumentRoot. Ако не можете да направите това, трябва да поставите .htaccess (DENY FROM ALL) точно под XOOPS_TRUST_PATH като втория най-добър начин.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Проверете дали PHP файлове в TRUST_PATH са настроени само за четене (трябва да е грешка 404,403 или 500)');
define('_AM_ADV_REGISTERGLOBALS',"Ако е „ВКЛЮЧЕНО“, тази настройка приканва различни атаки чрез инжектиране. Ако можете, задайте 'register_globals off' в php.ini или ако не е възможно, създайте или редактирайте .htaccess във вашата XOOPS директория:");
define('_AM_ADV_ALLOWURLFOPEN',"Ако е „ON“, тази настройка позволява на атакуващите да изпълняват произволни скриптове на отдалечени сървъри.<br>Само администратор може да промени тази опция.<br>Ако сте администратор, редактирайте php.ini или httpd.conf.<br><b>Пример от httpd.conf:<br> &nbsp; php_admin_flag &nbsp; позволи_url_fopen &nbsp; off</b><br>В противен случай, заявете го на вашите администратори.");
define('_AM_ADV_USETRANSSID',"Ако е „ВКЛЮЧЕНО“, вашият ID на сесията ще се показва в маркери за котва и т.н.<br>За да предотвратите привличане на сесия, добавете ред в .htaccess в XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Тази настройка приканва „SQL инжекции“.<br>Не забравяйте да включите „Принудително дезинфекция *“ в предпочитанията на този модул.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Отидете до мениджъра на префиксите');
define('_AM_ADV_MAINUNPATCHED', 'Трябва да редактирате вашия mainfile.php, както е написано в README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Вашата база данни е готова за DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Вашата база данни не е готова за DBLayer Trapping anti-SQL-Injection. Необходими са някои корекции.');
define('_AM_ADV_SUBTITLECHECK', 'Проверете дали Protector работи добре');
define('_AM_ADV_CHECKCONTAMI', 'Замърсяване');
define('_AM_ADV_CHECKISOCOM', 'Изолирани коментари');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'и поставете в него реда по-долу:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Префикс');
define('_AM_PROTECTOR_TABLES', 'Таблици');
define('_AM_PROTECTOR_UPDATED', 'Актуализирано');
define('_AM_PROTECTOR_COPY', 'Копирай');
define('_AM_PROTECTOR_ACTIONS', 'Действия');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Забранете IP адресите на проверените записи:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Бан!');
define('_AM_JS_BANCONFIRM', 'IP Бановете стават ли?');
define('_AM_MSG_BANNEDIP', 'IP адресите са забранени');
define('_AM_ADMINSTATS_TITLE', 'Резюме на дневника на Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Миналия месец');
define('_AM_ADMINSTATS_LAST_WEEK', 'Миналата седмица');
define('_AM_ADMINSTATS_LAST_DAY', 'Вчера');
define('_AM_ADMINSTATS_LAST_HOUR', 'Последния час');

//2.7.1 backfilled translations
define('_AM_TH_AGENT', 'AGENT');
