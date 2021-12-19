 <?php
include('Parsedown.php');
$contents = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/linux.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>
