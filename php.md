[Php přednášky](https://www.gjszlin.cz/ivt/esf/php/index.php)

# Soubory a adresáře
Data můžeme ukládat následujícími způsoby
- Textové soubory sjednoduchou strukturou(.txt, .csv)
- Textové soubory svnitřní hierarchií(.xml)
- Soubory binárního typu(otisk paměti do souboru)
- Databáze

PHP má vynikající možnosti pro manipulaci se soubory. Soubory můžete mazat, vytvářet, kopírovat, načítat atd.

### Procházení adresáře
Php má jednoduchou funkci na výpis souborů z adresáře.

```php
<?php
$soubory = glob("*");

foreach ($soubory as $soubor) {
  echo $soubor . "<br>\n";
}

```

nebo starým způsobem
```php
$soubory = array();
$dir = opendir(".");
while (($filename = readdir($dir)) !== false) {
    if (preg_match('~\\.txt$~', $filename)) {
        $soubory[] = $filename;
    }
}
closedir($dir);
```


### Vypsání obsahu souboru

- Bitově

```php
$soubor = fopen("soubor.txt", "r");
$text = fread($soubor, 10);
echo($text);
fclose($soubor);
```

- Proudově

```php
$stream = fopen('text.txt', 'r')
echo stream_get_contents($stream, 5);
```

### Vytvoření souboru

Vytvoření souboru

```php
$soubor = fopen("soubor.txt", "w+")
fwrite($soubor, "text");
fclose($soubor);
```

### Další operace

Kopírování
`copy("test.txt", "test2.txt");`

Přejmenování
`rename("soubor.txt", "soubor.html")`

Odstranění
`unlink("soubor.txt");`

#### Další použitelné hodnoty:

| Hodnota        | Popis           | 
| ------------- |:-------------:| 
| a      | Otevře soubor pro přidání, pokud soubor neexistuje PHP jej vytvoří | 
| a+      | Otevře soubor pro přidávání a čtení, pokud soubor neexistuje PHP jej vytvoří     | 
| r | Otevře soubor pouze pro čtení   | 
| r+  | Otevře soubor pro čtení a zápis    | 
| w | Otevře soubor pro zápis, původní data budou ztracena. Pokud soubor neexistuje PHP jej vytvoří    | 
| w+  | Otevře soubor pro zápis a čtení, původní data budou ztracena, pokud soubor neexistuje PHP jej vytvoří   | 

### Práva k souborům a složkám

Pokud PHP skripty, které mění obsah některých souborů nepracují správně, je to často způsobeno špatným nastavením přístupových práv souboru.

### Nahrávání souboru

Pokud chceme uživateli dát možnost nahrávat na server soubory (např. fotografie do galerie), je potřeba to udělat obzvlášť pečlivě. První dobrou zásadou je používat pro práci s nahranými soubory pole $_FILES a být si vědom různých velikostních limitů.

Dále musíme kontrolovat jestli je soubor validní např. pomocí `move_uploaded_file`.

Kontrola typu nahrávaného souboru je dalším důležitým bodem na našem seznamu. V proměnné $_FILES['userfile']['type'] sice máme k dispozici typ nahraného souboru, tento typ ale nastavuje klient a může ho mít nastaven špatně, útočník ho navíc může snadno změnit. Lepší je tedy zjistit typ souboru na základě koncovky např. funkcí mime_content_type.

```php
<?php
$koncovky = array('jpg', 'jpeg', 'png', 'gif');

$chyba = "";
if (!$_FILES || $_FILES["obrazek"]["error"] == UPLOAD_ERR_INI_SIZE) {
    $chyba = "Soubor je příliš velký, maximální velikost je " . ini_get('upload_max_filesize') . ".\n";
} elseif ($_FILES["obrazek"]["error"] == UPLOAD_ERR_NO_FILE) {
    $chyba = "Nevybrali jste soubor, který chcete nahrát.\n";
} elseif ($_FILES["obrazek"]["error"]) {
    $chyba = "Soubor se nepodařilo nahrát, kontaktujte prosím správce serveru.\n";
} elseif (!in_array(strtolower(pathinfo($_FILES["obrazek"]["name"], PATHINFO_EXTENSION)), $koncovky)) {
    $chyba = "Koncovka souboru musí být jedna z: " . implode(", ", $koncovky) . ".\n";
} elseif (!($imagesize = getimagesize($_FILES["obrazek"]["tmp_name"])) || $imagesize[2] > 3) {
    $chyba = "Typ obrázku musí být JPG, PNG nebo GIF.\n";
} else {
    move_uploaded_file($_FILES["obrazek"]["tmp_name"], "data/$id-" . $_FILES["obrazek"]["name"]);
}
?>
```
