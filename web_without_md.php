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
'https://github.com/bedjan/web/blob/main/web.md' => 'Oblíbené',
'https://github.com/bedjan/web/blob/main/mm.md' => 'Multimedia',
  'https://github.com/bedjan/web/blob/main/linux.md' => 'Linux',
'https://github.com/bedjan/web/blob/main/ekologie.md' => 'Ekologie',
'https://github.com/bedjan/web/blob/main/web.md' => 'Oblíbené',
'https://github.com/bedjan/web/blob/main/mm.md' => 'Multimedia',
  'https://github.com/bedjan/web/blob/main/linux.md' => 'Linux',
    'https://github.com/bedjan/web/blob/main/linux-cli.md' => 'Linux-cli',
        'https://github.com/bedjan/web/blob/main/systemd.md' => 'Systemd',
                'https://github.com/bedjan/web/blob/main/php.md' => 'Php',
                                'https://github.com/bedjan/web/blob/main/git.md' => 'Git',
                                                'https://github.com/bedjan/web/blob/main/markdown.md' => 'Markdown',
'https://github.com/bedjan/web/blob/main/ekologie.md' => 'Ekologie',
                'https://github.com/bedjan/web/blob/main/rec.md' => 'Řeč',
                'https://github.com/bedjan/web/blob/main/narcismus_poznamky.md' => 'Narcismus -poznamky',
                                'https://github.com/bedjan/web/blob/main/manipulace.md' => 'Manipulace',
                                                                'https://github.com/bedjan/web/blob/main/Sociologie.md' => 'Sociologie',
 'https://github.com/bedjan/web/blob/main/vyziva.md' => 'Výživa',
                                 'https://github.com/bedjan/web/blob/main/psychosomatika.md' => 'Psychosomatika',
                                 'https://github.com/bedjan/web/blob/main/jak_poloha_akne_prozradi_co_mate_v_tele_nemocneho.md' => 'Akne a nemoc',
  'https://github.com/bedjan/web/blob/main/hooponopono.md' => 'Hooponopono',
'https://github.com/bedjan/web/blob/main/asertivita_pro_pozemske_andely.md' => 'Asertivita ppa',
'https://github.com/bedjan/web/blob/main/knihy.md' => 'Knihy',
'https://github.com/bedjan/web/blob/main/vadim-zeland.md' => 'Vadim Zeland',
'https://github.com/bedjan/web/blob/main/carnegie.md' => 'Carnegie',
'https://github.com/bedjan/web/blob/main/polstina.md' => 'Polština',
'https://github.com/bedjan/web/blob/main/nemcina.md' => 'Němčina',
'https://github.com/bedjan/web/blob/main/nemecko_gramatika.md' => 'Německá gramatika',
'https://github.com/bedjan/web/blob/main/germanismy.md' => 'Germanismy',
'https://github.com/bedjan/web/blob/main/predpony.md' => 'Předpony',
'https://github.com/bedjan/web/blob/main/zivotopis.md' => 'CV',
'https://github.com/bedjan/web/blob/main/radia.md' => 'Radia',
                                 
'https://github.com/bedjan/web/blob/main/web_without_md.php' => 'Admin',
) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;

?>

<div>
    <ul>
        <?php foreach ($pages as $filename => $pageTitle) { 
        
            if ($filename == $currentPage) { ?>
        <li><?php echo $pageTitle ; ?></li>
            <?php } else { ?>
       <a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a>&nbsp;
            <?php
            } //if 
         } //foreach 
            ?>
    </ul>
</div>







</body>
</html>
