<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base target="_blank">
<a name="nahoru"></a>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<title>Osobní stránky</title>
</head>

<body>
<div class="jumbotron">
<!--<div class="container-fluid"> -->








<?php
$filename = 'Parsedown.php';

if (file_exists($filename)) {
copy("https://raw.githubusercontent.com/erusev/parsedown/master/Parsedown.php", "Parsedown.php");
} else {
copy("https://raw.githubusercontent.com/bedjan/w/main/Parsedown.php", "Parsedown.php");
}
// vykreslení menu
// include "https://raw.githubusercontent.com/bedjan/web/main/paticka.php";
?>



<a href="index.php?sekce=web" target="_self"><h2>Osobní stránky</h2></a>


<?php
error_reporting(E_ALL ^ E_NOTICE);

/* do proměnné $sekce uložíme hodnotu proměnné sekce z url */
$sekce = $_GET["sekce"];

if ($sekce == ""){
$sekce = "web";
}

?>



<header>
<nav>
  
           

<?php

$pages = array(
'web' => 'Domů',
'mm' => 'Multimedia',
'linux' => 'Linux',
'linux-cli' => 'Linux-cli',
'systemd' => 'Systemd',
'php' => 'Php',
'git' => 'Git',
'markdown' => 'Markdown',
'ekologie' => 'Ekologie',
'rec' => 'Řeč',
'germanismy' => 'Germanismy',
'vyziva' => 'Výživa',
'narcismus_poznamky' => 'Narcismus -poznamky',
'manipulace' => 'Manipulace',
'Sociologie' => 'Sociologie',
'lecba' => 'Léčba',
'psychosomatika' => 'Psychosomatika',
'jak_poloha_akne_prozradi_co_mate_v_tele_nemocneho' => 'Akne a nemoc',
'hooponopono' => 'Hooponopono',
'asertivita_pro_pozemske_andely' => 'Asertivita ppa',
'knihy' => 'Knihy',
'vadim-zeland' => 'Vadim Zeland',
'carnegie' => 'Carnegie',
'polstina' => 'Polština',
'nemcina' => 'Němčina',
'nemecka_gramatika' => 'Německá gramatika',

'germanismy' => 'germanismy',
'rec' => 'Řeč',
'jak_poloha_akne_prozradi_co_mate_v_tele_nemocneho' => 'Akne a nemoc',
'hooponopono' => 'Hooponopono',
'asertivita_pro_pozemske_andely' => 'Asertivita ppa',
'knihy' => 'Knihy',
'vadim-zeland' => 'Vadim Zeland',
'carnegie' => 'Carnegie',
'narcismus_poznamky' => 'Narcismus -poznamky',
'manipulace' => 'manipulace',
'sociologie' => 'Sociologie',
'psychosomatika' => 'Psychosomatika',
'predpony' => 'Předpony',
'zivotopis' => 'CV',
'dan' => 'Daň',
'radia' => 'Radia',
 

) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;

?>




        <?php foreach ($pages as $filename => $pageTitle) { 
            if ($filename == $currentPage) { ?>
        <?php echo $pageTitle ; ?>
            <?php } else { ?>
       <a href="<?php echo 'index.php?sekce=' , $filename ; ?>" target="_self"><?php echo $pageTitle ; ?></a>&nbsp;
            <?php
            } //if 
         } //foreach 
            ?>









    </header>
 


<br />
<a href="index.php?sekce=web" target="_self">
<svg style="width: 10%;height: 10%;  background-color: white;padding: 1%;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="612px" height="502.174px" viewBox="0 65.326 612 502.174" enable-background="new 0 65.326 612 502.174"
	 xml:space="preserve">
<ellipse fill="#C6C6C6" cx="283.5" cy="487.5" rx="259" ry="80"/>
<path id="bird" d="M210.333,65.331C104.367,66.105-12.349,150.637,1.056,276.449c4.303,40.393,18.533,63.704,52.171,79.03
	c36.307,16.544,57.022,54.556,50.406,112.954c-9.935,4.88-17.405,11.031-19.132,20.015c7.531-0.17,14.943-0.312,22.59,4.341
	c20.333,12.375,31.296,27.363,42.979,51.72c1.714,3.572,8.192,2.849,8.312-3.078c0.17-8.467-1.856-17.454-5.226-26.933
	c-2.955-8.313,3.059-7.985,6.917-6.106c6.399,3.115,16.334,9.43,30.39,13.098c5.392,1.407,5.995-3.877,5.224-6.991
	c-1.864-7.522-11.009-10.862-24.519-19.229c-4.82-2.984-0.927-9.736,5.168-8.351l20.234,2.415c3.359,0.763,4.555-6.114,0.882-7.875
	c-14.198-6.804-28.897-10.098-53.864-7.799c-11.617-29.265-29.811-61.617-15.674-81.681c12.639-17.938,31.216-20.74,39.147,43.489
	c-5.002,3.107-11.215,5.031-11.332,13.024c7.201-2.845,11.207-1.399,14.791,0c17.912,6.998,35.462,21.826,52.982,37.309
	c3.739,3.303,8.413-1.718,6.991-6.034c-2.138-6.494-8.053-10.659-14.791-20.016c-3.239-4.495,5.03-7.045,10.886-6.876
	c13.849,0.396,22.886,8.268,35.177,11.218c4.483,1.076,9.741-1.964,6.917-6.917c-3.472-6.085-13.015-9.124-19.18-13.413
	c-4.357-3.029-3.025-7.132,2.697-6.602c3.905,0.361,8.478,2.271,13.908,1.767c9.946-0.925,7.717-7.169-0.883-9.566
	c-19.036-5.304-39.891-6.311-61.665-5.225c-43.837-8.358-31.554-84.887,0-90.363c29.571-5.132,62.966-13.339,99.928-32.156
	c32.668-5.429,64.835-12.446,92.939-33.85c48.106-14.469,111.903,16.113,204.241,149.695c3.926,5.681,15.819,9.94,9.524-6.351
	c-15.893-41.125-68.176-93.328-92.13-132.085c-24.581-39.774-14.34-61.243-39.957-91.247
	c-21.326-24.978-47.502-25.803-77.339-17.365c-23.461,6.634-39.234-7.117-52.98-31.273C318.42,87.525,265.838,64.927,210.333,65.331
	z M445.731,203.01c6.12,0,11.112,4.919,11.112,11.038c0,6.119-4.994,11.111-11.112,11.111s-11.038-4.994-11.038-11.111
	C434.693,207.929,439.613,203.01,445.731,203.01z"/>
</svg>
</a>
<br />



<?php
echo '<a href="#dolu" target="_self"><h1 style="color: #8a8a5c;text-decoration: underline;">' . $sekce . '</h1></a>' . '</br>' ;
?>



     
<?php
if ($sekce == "web"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/web.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "mm"){
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

if ($sekce == "zivotopis"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/zivotopis.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "predpony"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/predpony.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "sociologie"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/sociologie.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "psychosomatika"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/psychosomatika.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "jak_poloha_akne_prozradi_co_mate_v_tele_nemocneho"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/jak_poloha_akne_prozradi_co_mate_v_tele_nemocneho.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}


if ($sekce == "hooponopono"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/hooponopono.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}


if ($sekce == "asertivita_pro_pozemske_andely"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/asertivita_pro_pozemske_andely.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "knihy"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/knihy.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "nemcina"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/nemcina.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "nemecka_gramatika"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/nemecka_gramatika.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "nemecko"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/nemecko.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "vadim-zeland"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/vadim-zeland.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "carnegie"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/carnegie.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "sociologie"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/sociologie.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "dan"){
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/web/raw/main/dan.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

?>

 <br />  

<a href="#nahoru" target="_self"><h1 style="color: #8a8a5c;text-decoration: underline;">Nahoru</h1></a>

 <br />   <br />  

<details>
  <summary> > Admin < </summary>


        <?php foreach ($pages as $filename => $pageTitle) { 
            if ($filename == $currentPage) { ?>
        <?php echo $pageTitle ; ?>
            <?php } else { ?>
       <a href="<?php echo 'https://github.com/bedjan/web/blob/main/' , $filename , '.md' ; ?>" target="_blank"><?php echo $pageTitle ; ?></a>&nbsp;
            <?php
            } //if 
         } //foreach 
            ?>










 <br />  
<a href="https://github.com/bedjan/web/blob/main/web_without_md.php" target="_blank">web_without_md</a>
<a href="https://github.com/bedjan/web/" target="_blank">Github</a>


 <br />  
</details>






<a name="dolu"></a>


</div>

</body>
</html>
