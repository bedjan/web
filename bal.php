<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/bal.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
?>
