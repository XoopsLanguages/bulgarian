xoopseditor предоставя група редактори за XOOPS

ръководство за потребителя:

1 проверете файловете xoops_version.php под /xoopseditor/, за да се уверите, че е по-нов от текущите ви

2 качете /xoopseditor/ в /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/клас/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/клас/xoopseditor/fckeditor
  XOOPS/клас/xoopseditor/koivi
  XOOPS/клас/xoopseditor/textarea
  XOOPS/клас/xoopseditor/tinymce

3 конфигурирайте предпочитанията, където е приложимо
3.1 ./dhtmlext(всички редактори)/език/: направете своя локален езиков файл на базата на english.php
3.3 ./dhtmlext(all editors)/editor_registry.php: задайте конфигурации за редактора: ред - ред на показване в случай, че се използва избор на редактор, 0 за забранено; nohtml - работи за не-html синтаксис
3.3 ./FCKeditor/module/: копирайте файловете в папките на модулите, в случай че са необходими специфични за модула разрешения за качване, съхранение и опции за редактор
3.3.1 ./FCKeditor/module/fckeditor.config.js: за опциите на редактора обикновено не е необходимо да ги променяте
3.3.2 ./FCKeditor/module/fckeditor.connector.php: за указване на папката за сърфиране на файлове (и съхранение за качване) => XOOPS/uploads/XOOPS_FCK_FOLDER/, папката трябва да се създаде ръчно
3.3.3 ./FCKeditor/module/fckeditor.upload.php: посочете разрешение за качване и хранилище за качване
3.4 XOOPS/uploads/fckeditor/: за създаване на папка, ако FCKeditor е активиран, използва се за качвания, от които папката за качване не е посочена
3.5 ./tinymce/tinymce/jscripts/: изтеглете локалните си езикови файлове от http://tinymce.moxiecode.com/language.php

4 проверете имената на файловете: за система с малки и главни букви в името на файла, уверете се, че имената на файловете са буквално правилни, т.е. "FCKeditor" не е идентичен с "fckeditor"

5 проверете /xoopseditor/sampleform.inc.php за ръководство за разработка
