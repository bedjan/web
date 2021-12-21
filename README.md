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


# Postup vytvořeni `XXX.php`

1) na [Repozitari](https://github.com/bedjan/web/tree/main) vytvor soubor `XXX.md`

2) Vytvoř nový php soubor `XXX.php` [XXX.php](https://github.com/bedjan/web/blob/main/XXX.php) a `prepis v php kódu XXX`
```
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
```

3) Uprav Hlavičku, do soboru `hlavicka.md` [hlavicka.md](https://github.com/bedjan/web/blob/main/hlavicka.md) pridej text `[XXX](XXX.php)`




4) Uprav soubor `obsah.php` [obsah.php](https://github.com/bedjan/web/blob/main/obsah.php) a pridej radek a prepis `XXX`

```
<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/XXX.php", "XXX.php");
?>

5) do `index.php` je vlozeno `obsah.php`

[index.php](https://github.com/bedjan/web/blob/main/index.php)

[obsah.php](https://github.com/bedjan/web/blob/main/obsah.php)```
