<?php
$filename = 'obsah.php';

if (file_exists($filename)) {
copy("https://raw.githubusercontent.com/bedjan/web/main/web_without_md.php", "obsah.php");
include('obsah.php');
} else {
copy("https://raw.githubusercontent.com/bedjan/web/main/web_without_md.php", "obsah.php");
include('obsah.php');
}
?>
