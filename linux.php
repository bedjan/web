 <?php
include('Parsedown.php');
$contents = file_get_contents('linux.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>
