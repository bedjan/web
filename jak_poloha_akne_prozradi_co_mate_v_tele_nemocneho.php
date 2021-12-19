 <?php
include('Parsedown.php');
$contents = file_get_contents('jak_poloha_akne_prozradi_co_mate_v_tele_nemocneho.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>
