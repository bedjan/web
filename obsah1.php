<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/mm.php", "mm.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/linux.php", "linux.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/ekologie.php", "ekologie.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/php.php", "php.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/linux-cli.php", "linux-cli.php");

copy("https://raw.githubusercontent.com/bedjan/web/main/germanismy.php", "germanismy.php");
?>

<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/Parsedown.php", "Parsedown.php");

?>

<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/hlavicka.md');
$html1 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/web1.md');
$html2 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/paticka.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
echo $Parsedown->text($html1);
echo $Parsedown->text($html2);
?>



