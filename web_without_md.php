<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<base target="_blank">
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video 
{
  background-color: black;
  color: white; 
  margin: 1;
  padding: 0;
  border: 0;
  font-size: 100%;
//  font: inherit;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}
body {
  line-height: 1;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
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
 

) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;

?>

<div>
    <ul>
        <?php foreach ($pages as $filename => $pageTitle) { 
            if ($filename == $currentPage) { ?>
        <li><?php echo $pageTitle ; ?></li>
            <?php } else { ?>
       <a href="<?php echo 'https://github.com/bedjan/web/blob/main/' , $filename , '.md' ; ?>" target="_blank"><?php echo $pageTitle ; ?></a>&nbsp;
            <?php
            } //if 
         } //foreach 
            ?>





    </ul>
</div>






<a href="https://github.com/bedjan/web/blob/main/web_without_md.php" target="_blank">web_without_md</a>
<a href="https://github.com/bedjan/web/" target="_blank">Github</a>


   








</body>
</html>
