<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/linux.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
?>
