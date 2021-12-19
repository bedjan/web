 <?php
include('Parsedown.php');
$contents = file_get_contents('index.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>
