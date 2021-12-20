<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/Parsedown.php", "Parsedown.php");
?>

<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/hlavicka.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
?>

<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/web.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
?>

<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/obsah.php", "obsah.php");
?>

<?php
include('obsah.php');
?>
