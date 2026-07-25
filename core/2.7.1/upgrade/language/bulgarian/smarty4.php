<?php

// _LANGCODE: bg
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Миграция на Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Резултати от скенера');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Стартирайте сканиране');
define('_XOOPS_SMARTY4_SCANNER_END', 'Изход от скенера');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Правило');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Съвпадение');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Файл');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Коригиране на броя');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Изисква се ръчен преглед');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Може да се коригира автоматично: променливата за всеки елемент ще бъде преименувана чрез добавяне на „_item“ (напр. „foo“ става „foo_item“).');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Не може да се записва');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Опции за повторно сканиране');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Щракнете върху квадратчето за отметка „Да“ по-долу и след това щракнете върху бутона Стартиране на сканиране, за да опитате автоматично да коригирате всички открити проблеми.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Маркирайте завършено');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Директория на шаблони (по избор)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Разширение на шаблон (по избор)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 въвежда значителна промяна: Smarty 4</h3>

<p>За съжаление, тази промяна може потенциално да наруши някои по-стари теми. Ето защо, преди да продължите с надстройката, моля, уверете се, че следвате следните стъпки:

<li>Стартирайте preflight.php, за да проверите за остарели теми или шаблони на модули.</li>
<li>Ако бъдат идентифицирани някакви проблеми, консултирайте се с този документ, за да разберете необходимите модификации, преди да продължите с надстройката.</li>
<li>След като направите необходимите промени, стартирайте preflight.php отново.</li>
<li>Ако няма повече проблеми, можете да започнете процеса на надграждане.</li>
</p>
EOT,
);
