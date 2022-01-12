<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<base target="_self">
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
error_reporting(E_ALL ^ E_NOTICE);

/* do proměnné $sekce uložíme hodnotu proměnné sekce z url */
$sekce = $_GET["sekce"];

if ($sekce == ""){
$sekce = "index";
}

?>

<header>
<nav role="">
            <ul>
<a href="index.php?sekce=index">Domů</a>
<a href="index.php?sekce=multimedia">Multimedia</a>
<a href="index.php?sekce=radia">Radia</a>
<a href="index.php?sekce=linux">Linux</a>
<a href="index.php?sekce=linux-cli">Linux-cli</a>
<a href="index.php?sekce=systemd">Systemd</a>
<a href="index.php?sekce=php">Php</a>
<a href="index.php?sekce=git">Git</a>
<a href="index.php?sekce=markdown">Markdown</a>
<a href="index.php?sekce=ekologie">Ekologie</a> 
<a href="index.php?sekce=php">Php</a> 
<a href="index.php?sekce=germanismy">Germanismy</a> 
<a href="index.php?sekce=vyziva">Výživa</a> 
<a href="index.php?sekce=lecba">Léčba</a> 
<a href="index.php?sekce=polstina">Polština</a>

<a href="index.php?sekce=rec">Řeč</a>
<a href="index.php?sekce=narcismus_poznamky">Narcismus -poznamky</a>
<a href="index.php?sekce=manipulace">Manipulace</a>
<a href="index.php?sekce=sociologie">Sociologie</a>
<a href="index.php?sekce=vyziva">Výživa</a>
<a href="index.php?sekce=lecba">Léčba</a>

<a href="index.php?sekce=psychosomatika">Psychosomatika</a>
<a href="index.php?sekce=jak_poloha_akne_prozradi_co_mate_v_tele_nemocneho">Akne a nemoc</a>
<a href="index.php?sekce=hooponopono">Hooponopono</a>
<a href="index.php?sekce=asertivita_pro_pozemske_andely">Asertivita ppa</a>
<a href="index.php?sekce=knihy">Knihy</a>
<a href="index.php?sekce=vadim-zeland">Vadim Zeland</a>
<a href="index.php?sekce=carnegie">Carnegie</a>

<a href="index.php?sekce=polstina">Polština</a>
<a href="index.php?sekce=nemcina">Němčina</a>
<a href="index.php?sekce=nemecko_gramatika">Německá gramatika</a>
<a href="index.php?sekce=nemecko">Německo</a>
<a href="index.php?sekce=germanismy">Germanismy</a>
<a href="index.php?sekce=zivotopis">CV</a>
<a href="index.php?sekce=predpony">Předpony</a>
            </ul>
        </nav>
    </header>
    
 <br />  
<hr>
 <br /> 
     
<?php
if ($sekce == "index"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/web.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "multimedia"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/mm.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "radia"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/radia.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "linux"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/linux.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "linux-cli"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/linux-cli.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "systemd"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/systemd.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "php"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/php.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "git"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/git.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "markdown"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/markdown.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "ekologie"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/ekologie.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "php"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/php.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "germanismy"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/germanismy.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "vyziva"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/vyziva.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "lecba"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/lecba.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "polstina"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/polstina.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}


if ($sekce == "rec"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/rec.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "narcismus_poznamky"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/narcismus_poznamky.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}


if ($sekce == "manipulace"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/manipulace.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

?>

 <br />  
<hr>
 <br />  


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


 <br />  


</body>
</html>
