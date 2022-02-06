[Příručka pro git](https://knihy.nic.cz/files/nic/edice/scott_chacon_pro_git.pdf)

[Git klienti](https://git-scm.com/download/gui/linux)

# Instalace Gitu
sudo zypper in git -y # pro OpenSuse

# Konfigurace
git config --global user.email "vas@email.cz" # váš email
git config --global user.name "jmeno"         # vaše uživatelské jméno
git config --global core.editor "nano"        # váš preferovaný textový editor
git config --list                             # zobrazení konfigurace Gitu

# Vytvoření LOKÁLNÍHO repozitáře k projektu
cd cesta/k/vasemu/projektu # otevření adresáře s projektem
git init                   # založení repozitáře
# Poznámka:
# struktura pro repozitář Gitu je skrytá (protože jméno začíná symbolem tečky "."),
# pro zobrazení celého adresáře (včetně skrytých souborů/podadresářů) lze použít
ls -a

# Klonování (již inicializovaného) repozitáře ze VZDÁLENÉHO serveru
git clone username@host:project.git # naklonuje do právě otevřeného adresáře

# Získání aktuální verze již naklonovaného repozitáře ze VZDÁLENÉHO serveru
cd lokalni/cesta/k/projektu
git pull

# Indexace souborů v projektu -- různé způsoby
git add main.cpp # zaindexuje soubor "main.cpp" pro daný projekt
git add *.cpp    # zaindexuje všechny soubory s příponou ".cpp" v daném adresáři
git add --all    # zaindexuje vše
# Poznámka:
# pokud je potřeba nějaké soubory při přidávání ignorovat, lze vytvořit v kořenovém
# adresáři projektu textový soubor ".gitignore" a na každý řádek napsat jeden 
# ignorovaný soubor (znovu lze místo celých názvů použít wildcard jako např. "*" 
# nebo "?" -- seznam souborů doporučených pro ignoraci pro jednotlivé prog. jazyky
# je dostupný na https://github.com/github/gitignore.

# Provádění změn v lokálním repozitáři (nepodceňovat popisy změn!)
git commit -m "popis zmen" # přidá do repozitáže změněné/přidané zaindexované soub.
git commit                 # otevře pref. textový editor vyzývající k popisu změn
git commit -a              # přidá VŠECHNY změněné/nové soubory do repozitáře
git commit --amend         # změna již provedeného commitu (používat VÝJIMEČNĚ)

# Zaznamenání změn na VZDÁLENÉM serveru
git push # předá vše od posledního lokálního spuštění příkazu "commit"

# Odstranění/přejmenování souboru v projektu (fyzicky i v repozitáři)
git rm -f soubor     # odstranění; soubor stale zustane v historii verzí
git mv jmeno1 jmeno2 # přejmenování (využívá příkazu pro přesun)

# Logy a výpisy
git log --pretty=format:"%h : %an : %ar : %s" # ID commitu, kdo, kdy, co
git log -p 2                                  # poslední dva commity
git status
