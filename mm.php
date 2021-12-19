 <?php
include('Parsedown.php');
$contents = file_get_contents('mm.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>
