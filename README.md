# Web -index.php

https://github.com/bedjan/web/blob/main/index.php

https://github.com/bedjan/web/blob/main/obsah.php

https://github.com/bedjan/web/blob/main/hlavicka.md

https://github.com/bedjan/web/blob/main/web.md

https://github.com/bedjan/web/blob/main/paticka.md


# Další

https://docs.github.com/en/github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax

https://htmlpreview.github.io/

https://github.com/bedjan/web


# Postup
1) Vytvor nový php soubor XXX.php a prepis v php kódu XXX

<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/hlavicka.md');
$html1 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/XXX.md');
$html2 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/paticka.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
echo $Parsedown->text($html1);
echo $Parsedown->text($html2);
?>

2) Uprav Hlavicku

do soboru hlavicka.md pridej [XXX](XXX.php)

https://github.com/bedjan/web/blob/main/hlavicka.md


3) 
