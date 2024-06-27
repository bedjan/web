<?php
$filename = 'index.html';

if (file_exists($filename)) {
copy("https://raw.githubusercontent.com/bedjan/web/main/index_bedjan_web.html", "index.html");
include('index.html');
} else {
copy("https://raw.githubusercontent.com/bedjan/web/main/index_bedjan_web.html", "index.html");
include('index.html');
}
?>
