<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<base target="_blank">
<style>
body {
  background-color: black;
  font-family: monospace;
}
a {
  color: white;
  margin-left: 2px;
} 
p {
  color: white;
  margin-left: 2px;
} 
pre {
  color: white;
  margin-left: 2px;
} 
h1 {
  color: white;
  margin-left: 2px;
} 
h2 {
  color: white;
  margin-left: 2px;
} 
h3 {
  color: white;
  margin-left: 2px;
} 
h4 {
  color: white;
  margin-left: 2px;
} 
h5 {
  color: white;
  margin-left: 2px;
} 
form {
  color: white;
  margin-left: 2px;
} 




</style>


<title>Osobní stránky</title>
</head>

<body>

<h2><a href="#">Osobní stránky</a></h2>


<?php

$pages = array(
'web' => 'Oblíbené',
'mm' => 'Multimedia',
'linux' => 'Linux',
'linux-cli' => 'Linux-cli',
'systemd' => 'Systemd',
'php' => 'Php',
'git' => 'Git',
'markdown' => 'Markdown',
'ekologie' => 'Ekologie',
'rec' => 'Řeč',
'narcismus_poznamky' => 'Narcismus -poznamky',
'manipulace' => 'Manipulace',
'Sociologie' => 'Sociologie',
'vyziva' => 'Výživa',
'psychosomatika' => 'Psychosomatika',
'jak_poloha_akne_prozradi_co_mate_v_tele_nemocneho' => 'Akne a nemoc',
'hooponopono' => 'Hooponopono',
'asertivita_pro_pozemske_andely' => 'Asertivita ppa',
'knihy' => 'Knihy',
'vadim-zeland' => 'Vadim Zeland',
'carnegie' => 'Carnegie',
'polstina' => 'Polština',
'nemcina' => 'Němčina',
'nemecko_gramatika' => 'Německá gramatika',
'germanismy' => 'Germanismy',
'predpony' => 'Předpony',
'zivotopis' => 'CV',
'radia' => 'Radia',
 
'web_without_md.php' => 'Admin',
) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;

?>

<div>
    <ul>
        <?php foreach ($pages as $filename => $pageTitle) { 
            if ($filename == $currentPage) { ?>
        <li><?php echo $pageTitle ; ?></li>
            <?php } else { ?>
       <a href="<?php echo 'https://github.com/bedjan/web/blob/main/' , $filename , '.md' ; ?>"><?php echo $pageTitle ; ?></a>&nbsp;
            <?php
            } //if 
         } //foreach 
            ?>
    </ul>
</div>



<a href="https://github.com/bedjan/web/blob/main/web_without_md.php>web_without_md</a>
<a href="https://github.com/bedjan/web/>Github</a>

</body>
</html>
