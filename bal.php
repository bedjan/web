 <?php
include('Parsedown.php');
$contents = file_get_contents('bal.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>
