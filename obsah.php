<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/mm.php", "mm.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/linux.php", "linux.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/ekologie.php", "ekologie.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/php.php", "php.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/linux-cli.php", "linux-cli.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/germanismy.php", "germanismy.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/vyziva.php", "vyziva.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/lecba.php", "lecba.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/polstina.php", "polstina.php");
?>

<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/Parsedown.php", "Parsedown.php");

?>

<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/hlavicka.md');
$html1 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/web.md');
$html2 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/paticka.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
echo $Parsedown->text($html1);
echo $Parsedown->text($html2);
?>




