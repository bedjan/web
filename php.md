[Péhápko: Učebnice PHP](http://www.pehapko.cz/)

[Php přednášky](https://www.gjszlin.cz/ivt/esf/php/index.php)

[Php manuál](https://php.baraja.cz/)

[Php triky](https://php.vrana.cz/)

[PHP základy](https://www.vascak.cz/data/materialy_ikt/internet/php/zdroj/php02.php)

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
``

# Cacheování obsahu cizí stránky




Jak cacheovat výsledky obsahu staženého z cizí stránky.


Když potřebujeme [stáhnout obsah z cizí URL](./stazeni-stranky) (mimo náš web), jedná se většinou o **časově náročnější operaci**. Je sice možné [nastavit časový limit](./ziskani-obsahu-timeout), ale stejně je lepší výsledek _cacheovat_, je-li to možné a nepotřebujeme skutečně co nejnovější data.



Cílem je časově náročnou _cizí stránku_ odbourat a použít místo toho **cache na vlastním webu**.

Postup
------

Jak na to? Obsah se bude stále získávat funkcí `file_**get**_contents`, ale zároveň se bude funkcí `file_**put**_contents` ukládat k nám na web.

Ukládání ale proběhne jen v případě, že:

*   kopie na našem webu **ještě není vytvořená** (funkce `file_exist`),
*   kopie (soubor cache) už je moc **starý** (porovná se stáří souboru – funkce `filemtime`)

V takovém případě (soubor na našem serveru neexistuje nebo je starý) se stáhne a uloží aktuální obsah, jinak se pouze zobrazí výsledek z _cache_, což **bude rychlé**.

Řešení
------
``
´´
<?php
    function ziskatSouborCache($url) {
      $platnost = 60 * 60; // 60 s * 60 min = 1 hodina
      $soubor = "cache/" . urlencode($url);
    
      if (
          file_exists($soubor) && 
          (filemtime($soubor) > time() - $platnost)
         ) {
        // vrátíme obsah z keše
        return file_get_contents($soubor);
      }
      else {
        // obsah se musí stáhnout z cizí URL
        $obsah = file_get_contents($url);
        if ($obsah) {
          // uložení obsahu do cache
          file_put_contents($soubor, $obsah);
        }
        return $obsah;
      }
    }
``?>
´´

Použití je potom prosté:

´´
<?php
``php
    echo ziskatSouborCache(
      "http://jecas.cz/ziskani-obsahu-cache"
    );
    ?>
 ´´   
 
    nebo markdown přes parsedown
    
   ´´ 
    <?php
include('Parsedown.php');
$html = ziskatSouborCache($urls);
$Parsedown = new Parsedown();
echo $Parsedown->text($html); 
?>
´´

``
A funkce `ziskatSouborCache` zařídí, jestli se soubor načte z **cizí URL** nebo z našeho serveru.

Pro funkčnost výše uvedeného skriptu je nutné vytvořit adresář `cache`, jinak pokus o uložení souboru **skončí chybou**.`
