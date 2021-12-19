<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/mm.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
?>
