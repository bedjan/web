<?php
$filename = 'obsah.php';

if (file_exists($filename)) {
include('obsah.php');
} else {
include('https://raw.githubusercontent.com/bedjan/web/main/obsah.php');
}
?>
