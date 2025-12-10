<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uživatelské Zdroje a Odkazy</title>
    <style>
        /* Základní styly pro lepší čitelnost a vzhled */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            line-height: 1.5; 
            padding: 20px; 
            background-color: #f0f2f5;
            color: #333;
        }
        .container { 
            max-width: 900px; 
            margin: auto; 
            background: white; 
            padding: 30px; 
            border-radius: 12px; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
        }
        h1 {
            color: #007bff;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        details { 
            margin-bottom: 12px; 
            border: 1px solid #dcdcdc; 
            border-radius: 8px; 
            background-color: #ffffff;
            transition: box-shadow 0.2s ease;
        }
        details:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }
        summary { 
            font-weight: 600; 
            cursor: pointer; 
            padding: 12px 15px;
            color: #333;
            list-style: none; /* Skryje defaultní trojúhelník */
            position: relative;
        }
        summary::before {
            content: '▶'; /* Custom trojúhelník pro zavřený stav */
            position: absolute;
            left: 0;
            font-size: 0.8em;
            transition: transform 0.2s;
        }
        details[open] summary::before {
            content: '▼'; /* Změna na šipku dolů pro otevřený stav */
        }
        details[open] summary { 
            background-color: #f7f7f7;
            border-bottom: 1px solid #dcdcdc;
        }
        .content {
            padding: 10px 15px 10px 30px; /* Odsazení obsahu */
        }
        .content p {
            margin: 5px 0;
        }
        a { 
            text-decoration: none; 
            color: #007bff; 
            transition: color 0.15s ease;
        }
        a:hover { 
            text-decoration: underline; 
            color: #0056b3;
        }
        h3 {
            color: #dc3545; /* Červená pro nadpisy předmětů */
            margin-top: 15px;
            margin-bottom: 8px;
            border-left: 3px solid #dc3545;
            padding-left: 10px;
        }
        .code-block {
            background-color: #eeeeee;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            white-space: pre-wrap;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Správa Osobních Odkazů a Zdroje</h1>

    <details close>
        <summary> Oblíbené</summary>
        <div class="content">
            <p><a href="https://app.simplenote.com/" target="_blank">Simplenote</a></p>
            <p><a href="https://wttr.in/duchcov" target="_blank">Počasí</a></p>
            <p><a href="https://calendar.google.com/calendar/u/0/r?opentasks=1" target="_blank">Tasks</a></p>
            <p><a href="https://app.raindrop.io/account/login" target="_blank">Raindrop.io</a></p>
            <p><a href="https://uiwjs.github.io/react-md-editor/" target="_blank">Markdown editor</a></p>
            <p><a href="https://vault.bitwarden.com/#/vault" target="_blank">Bitwarden</a></p>
            <p><a href="http://free-website-translation.com/" target="_blank">Web prekladac</a></p>
            <p><a href="https://hackmd.io/?nav=overview" target="_blank">Hackmd</a></p>
            <p><a href="https://lastpass.com/?ac=1" target="_blank">Lastpass</a></p>
            <p><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Gmail</a></p>
            <p><a href="https://keep.google.com/#home" target="_blank">Gkeep</a></p>
            <p><a href="https://web.whatsapp.com/" target="_blank">Whatsapp</a></p>
            <p><a href="https://translate.google.cz/" target="_blank">Gtranslate</a></p>
            <p><a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
            <p><a href="https://www.instagram.com/" target="_blank">Instagram</a></p>
            <p><a href="https://www.youtube.com/" target="_blank">Youtube</a></p>
            <p><a href="https://uloz.to" target="_blank">Uloz.to</a></p>
            <p><a href="https://prehraj.to/" target="_blank">Prehraj.to</a></p>
            <p><a href="https://www.csfd.cz/" target="_blank">Čsfd</a></p>
            <p><a href="https://nfa.cz/cz/obchod-a-distribuce/distribuce-v-cr/filmy-do-1964/" target="_blank">Filmy nfa</a></p>
            <p><a href="https://uloz.to/folder/dFY1yYQFavz0/name/Yperit-Paradise#!ZGAvMQR2ZGR0ZwIxZwV3LmL4Mwp5AGO6qzSIJTMUGJczDGVmZj==" target="_blank">Filmy stazeni</a></p>
            <p><a href="https://github.com/bedjan/openbox" target="_blank">Openbox</a></p>
            <p><a href="https://www.onlineocr.net/" target="_blank">OCR</a></p>
            <p><a href="https://vyzivujicitradice.cz/" target="_blank">Zdrava vyziva</a></p>
            <p><a href="https://ceskepodcasty.cz/" target="_blank">Podcasty</a></p>
            <p><a href="https://lindat.mff.cuni.cz/services/translation/" target="_blank">Matfyz prekladac</a></p>
            <p><a href="https://lindat.cz/translation/" target="_blank">Ukrajinsky prekladac vs. CZ</a></p>
            <p><a href="https://www.postaonline.cz/trackandtrace" target="_blank">Posta dorucene sledovani</a></p>
            <p><a href="https://claude.ai/onboarding?returnTo=%2F%3F" target="_blank">Claude AI</a></p>
            <p><a href="https://www.sledujserialy.io" target="_blank">Sleduj serialy</a></p>
            <p><a href="https://www.rajce.idnes.cz/lipova-lipka/album/kulisci/1511277136" target="_blank">Jirka fotky</a></p>
            <p><a href="https://app.gisonline.cz/chytre-mapy/" target="_blank">Chytre mapy</a></p>
            <p><a href="https://www.epochtimes.cz/" target="_blank">Epochtimes</a></p>
        </div>
    </details>


    <details close>
        <summary> Škola</summary>
        <div class="content">
            <p><a href="https://github.com/bedjan/ucitel/blob/main/rozvrh.md" target="_blank">Rozvrh</a></p>
            <p><a href="https://portal.ujep.cz" target="_blank">Stag</a></p>
            <p><a href="https://www.pf.ujep.cz/cs/cat/centrum-celozivotniho-vzdelavani-kontakty" target="_blank">Kontakty</a></p>
            <p><a href="https://www.pf.ujep.cz/cs/centrum-celozivotniho-vzdelavani-prihlaska" target="_blank">Přihláška CCV</a></p>
            <p><a href="https://portal.ujep.cz/portal/studium/uchazec/eprihlaska.html" target="_blank">Epřihláška ke studiu</a></p>
            <p><a href="https://markdowntohtml.com/" target="_blank">Markdown to html</a></p>
        </div>
    </details>

    <details close>
        <summary> Google</summary>
        <div class="content">
            <p><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Gmail</a></p>
            <p><a href="http://free-website-translation.com/" target="_blank">Web prekladac</a></p>
            <p><a href="https://calendar.google.com/calendar/u/0/r" target="_blank">Kalendář</a></p>
        </div>
    </details>

    <details close>
        <summary> AI</summary>
        <div class="content">
            <p><a href="https://chatgpt.com/" target="_blank">Chat gpt</a></p>
            <p><a href="https://gemini.google.com" target="_blank">Gemini</a></p>
            <p><a href="https://qwen.ai/home" target="_blank">Qwen ai</a></p>
            <p><a href="https://claude.ai/onboarding?returnTo=%2F%3F"  target="_blank">Claude AI</a></p>
            <p><a href="https://chat.openai.com"  target="_blank">ChatGPT</a></p>
            <p><a href="https://bard.google.com/chat"  target="_blank">Bard</a></p>
            <p><a href="https://copilot.microsoft.com/"  target="_blank">Copilot</a></p>
            <p><a href="https://www.craiyon.com/"  target="_blank">Craiyon</a></p>
            <p><a href="https://you.com/?chatMode=default"  target="_blank">You - chatgpt 4 zdarma</a></p>
            <p><a href="https://www.codebreakeredu.com/chat/"  target="_blank">Codebreaker - dotaz vygeneruje téma</a></p>
            <p><a href="https://www.perplexity.ai/"  target="_blank">Perplexity - dotaz vygeneruje téma</a></p>
            <p><a href="https://talkai.info/cs/"  target="_blank">Talkai - chat gpr bez registrace</a></p>
            <p><a href="https://www.copy.ai/"  target="_blank">Copy AI - vytváření obsahu, hledání zákazníků</a></p>
            <p><a href="https://goatchat.ai/cs"  target="_blank">Goat ai - chat gpt 4</a></p>
            <p><a href="https://www.closerscopy.com/"  target="_blank">Closer copy - copywriting</a></p>
            <p><a href="https://rytr.me/"  target="_blank">Rytr - tvorba obsahu</a></p>
            <p><a href="https://www.jasper.ai/chat"  target="_blank">Jasper - chatbot</a></p>
            <p><a href="https://writesonic.com/"  target="_blank">Writesonic - SEO, klíčová slova</a></p>
            <p><a href="https://www.hyperwriteai.com/"  target="_blank">Hyperwrite - marketing, výzkum</a></p>
            <p><a href="https://aichat.com/"  target="_blank">AI chat - marketing, prodej, zákaznický servis</a></p>
            <p><a href="https://cleanup.pictures/"  target="_blank">vymazání částí obrazovky</a></p>
            <p><a href="https://gamma.app/create"  target="_blank">vytvoření prezentace</a></p>
        </div>
    </details>

    <details close>
        <summary> Online videa</summary>
        <div class="content">
            <p><a href="https://odysee.com/" target="_blank">Odysee</a></p>
            <p><a href="https://rumble.com/" target="_blank">Rumble</a></p>
        </div>
    </details>

    <details close>
        <summary> Download</summary>
        <div class="content">
            <p><a href="https://snapsave.app/cs" target="_blank">Facebook download 1</a></p>
            <p><a href="https://fdown.net/" target="_blank">Facebook download 2</a></p>
            <p><a href="https://ytop1.com/en9" target="_blank">Youtube video download</a></p>
            <p><a href="https://ytop1.com/en87" target="_blank">Youtube to mp3</a></p>
            <p><a href="https://ssstik.io/en" target="_blank">Tik tok download</a></p>
            <p><a href="https://igram.io/" target="_blank">Instagram download</a></p>
            <p><a href="https://downsub.com/" target="_blank">Youtube subtitle download</a></p>
            <p><a href="https://downloadatwittervideo.com/" target="_blank">Twitter download</a></p>
            <p><a href="https://sktorrent.eu" target="_blank">Torrent download</a></p>
            <p><a href="https://online.sktorrent.eu/" target="_blank">Filmy online</a></p>
        </div>
    </details>

    <details close>
        <summary> Úložiště</summary>
        <div class="content">
            <p><a href="https://fastshare.cz"  target="_blank">Fastshare</a></p>
            <p><a href="https://datoid.cz"  target="_blank">Datoid</a></p>
            <p><a href="https://webshare.cz/"  target="_blank">Webshare</a></p>
            <p><a href="https://edisk.cz"  target="_blank">Edisk</a></p>
            <p><a href="https://uschovna.cz/"  target="_blank">Úschovna</a></p>
            <p><a href="https://prehrajto.cz"  target="_blank">Prehrajto</a></p>
            <p><a href="https://sdilej.cz"  target="_blank">Sdílej</a></p>
            <p><a href="https://dafilms.cz"  target="_blank">Dafilms</a></p>
            <p><a href="https://dfiles.eu/"  target="_blank">Dfiles.eu</a></p>
            <p><a href="https://multcloud.com"  target="_blank">Multcloud.com</a></p>
            <p><a href="https://dropbox.com"  target="_blank">Dropbox</a></p>
            <p><a href="https://idrive.com"  target="_blank">Idrive</a></p>
            <p><a href="https://onecloud.com"  target="_blank">Onecloud</a></p>
        </div>
    </details>

    <details close>
        <summary> Užitečné zdroje obrázků bez porušení autorských práv</summary>
        <div class="content">
            <p><a href="https://www.pexels.com/" target="_blank">Pexels – Obrázky a videa zdarma</a></p>
            <p><a href="https://pixabay.com/" target="_blank">Pixabay – Fotky, ilustrace a vektory</a></p>
            <p><a href="https://unsplash.com/" target="_blank">Unsplash – Kolekce fotografií ve vysoké kvalitě</a></p>
            <p><a href="https://commons.wikimedia.org/wiki/Hlavn%C3%AD_strana" target="_blank">Wikimedia Commons – Mediální soubory s volnou licencí</a></p>
            <p><a href="https://burst.shopify.com/" target="_blank">Burst – Knihovna fotografií pro podnikání</a></p>
        </div>
    </details>

    <details close>
        <summary> Html šablony</summary>
        <div class="content">
            <p><a href="https://html5up.net/?utm_source=chatgpt.com"  target="_blank">Html 5 UP</a></p>
            <p><a href="https://templatemo.com/"  target="_blank">Template mo</a></p>
            <p><a href="https://startbootstrap.com/"  target="_blank">Start bootstrap</a></p>
            <p><a href="https://www.awardspace.com/"  target="_blank">Awardspace.net hosting</a></p>
        </div>
    </details>

    <details close>
        <summary> Testy - Výběr povolání</summary>
        <div class="content">
            <p><a href="http://www.emiero.cz"  target="_blank">Emiero</a></p>
            <p><a href="http://www.infoabsolvent.cz/Profitest"  target="_blank">Profitest</a></p>
            <p><a href="https://dotaznik.zlkraj.cz"  target="_blank">Dotazník</a></p>
            <p><a href="http://www.zkouskaosobnosti.cz"  target="_blank">Zkouska osobnosti</a></p>
            <p><a href="http://www.testosobnosti.zarohem.cz"  target="_blank">Zkouska osobnosti</a></p>
            <p><a href="http://www.mujzivotposkole.cz"  target="_blank">Po skole</a></p>
            <p><a href="http://www.testmojeplus.cz"  target="_blank">Moje plus</a></p>
            <p><a href="http://www.job-hub.cz"  target="_blank">Job</a></p>
            <p><a href="https://www.salmondo.cz"  target="_blank">Salmondo</a></p>
            <p><a href="https://www.comdi.cz"  target="_blank">Comdi</a></p>
            <p><a href="https://www.regio-advisor.cz"  target="_blank">Advisor</a></p>
            <p><a href="https://cs.wikipedia.org/wiki/Coping"  target="_blank">Coping</a></p>
        </div>
    </details>


    <details close>
        <summary> Předměty</summary>
        <div class="content">
            <h3 style="color: red">Matematika</h3>
            <p><a href="https://wordwall.net/cs-cz/community/matematika/kv%C3%ADz-z-matematiky"  target="_blank">Matematika kviz</a></p>
            <p><a href="https://www.skolasnadhledem.cz/"  target="_blank">Škola s nadhledem</a></p>
            <p><a href="https://www.geogebra.org/calculator"  target="_blank">Grafy vyobrazení</a></p>
            <p><a href="https://www.geogebra.org/materials"  target="_blank">Výukové materiály</a></p>
            <p><a href="https://www.matweb.cz/"  target="_blank">Matematika polopatě</a></p>
            <p><a href="http://www.rovnice-nerovnice.cz/index.html"  target="_blank">Rovnice nerovnice</a></p>
            <p><a href="https://skolaposkole.cz/matematika-ss/kvadraticke-rovnice"  target="_blank">Kvadratické rovnice</a></p>
            <p><a href="https://reseneulohy.cz/cs"  target="_blank">Sbírka řešených úloh</a></p>
            <p><a href="https://www.priklady.com/cs_new/index.php/priklady-z-matematiky-pro-vysoke-skoly"  target="_blank">Příklady z Matematiky pro Vysoké Školy</a></p>
            <p><a href="https://kdm.karlin.mff.cuni.cz/diplomky/stepan_kurka/trojuhelnik.htm"  target="_blank">Konstrukční úlohy</a></p>
            <h3 style="color: red">Fyzika</h3>
            <p><a href="https://iqlandia.cz/iqblog/section:22"  target="_blank">Iqlandia - Fyzika</a></p>
            <p><a href="https://www.e-fyzika.cz/priklady/"  target="_blank">Fyzika - Příklady na středoškolskou fyziku</a></p>
            <h3 style="color: red">Chemie</h3>
            <p><a href="https://chemicke-vypocty.cz/"  target="_blank">Chemické výpočty</a></p>
        </div>
    </details>


    <details close>
        <summary> Obecné</summary>
        <div class="content">
            <p><a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
            <p><a href="https://twitter.com/home" target="_blank">Twitter</a></p>
            <p><a href="https://www.instagram.com/" target="_blank">Instagram</a></p>
            <p><a href="https://keep.google.com/#home" target="_blank">Gkeep</a></p>
            <p><a href="https://app.simplenote.com/login/" target="_blank">Simplenote</a></p>
            <p><a href="https://www.dropbox.com/home" target="_blank">Dropbox</a></p>
            <p><a href="https://time.is/calendar" target="_blank">Kalendar</a></p>
            <p><a href="https://time.is/" target="_blank">Čas</a></p>
            <p><a href="https://www.vodafone.cz/muj/prihlaseni" target="_blank">Muj vodafone</a></p>
            <p><a href="https://moje.oskarta.cz/" target="_blank">Oskarta</a></p>
            <p><a href="https://www.jidelny.me.cz/jidelna14/" target="_blank">Jidelny</a></p>
        </div>
    </details>

    <details close>
        <summary> Html šablony</summary>
        <div class="content">
            <p><a href="https://html5up.net/?utm_source=chatgpt.com"  target="_blank">Html 5 UP</a></p>
            <p><a href="https://templatemo.com/"  target="_blank">Template mo</a></p>
            <p><a href="https://startbootstrap.com/"  target="_blank">Start bootstrap</a></p>
            <p><a href="https://www.awardspace.com/"  target="_blank">Awardspace.net hosting</a></p>
        </div>
    </details>


    <details close>
        <summary> Google</summary>
        <div class="content">
            <p><a href="https://translate.google.cz/" target="_blank">Gtranslate</a></p>
            <p><a href="https://calendar.google.com/calendar/u/0/r?opentasks=1" target="_blank">Tasks</a></p>
            <p><a href="https://www.youtube.com/" target="_blank">Youtube</a></p>
            <p><a href="https://keep.google.com/#home" target="_blank">Gkeep</a></p>
            <p><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Gmail</a></p>
            <p><a href="https://drive.google.com/drive/" target="_blank">Gdisk</a></p>
            <p><a href="https://docs.google.com/document/u/0/" target="_blank">Gdocs</a></p>
            <p><a href="https://photos.google.com/?hl=cs&pli=1" target="_blank">Gphotos</a></p>
            <p><a href="https://sites.google.com/site/bedjansite/" target="_blank">Gsites</a></p>
            <p><a href="https://takeout.google.com/settings/takeout?pli=1" target="_blank">Gtakeout</a></p>
        </div>
    </details>



    <details close>
        <summary> Banky, pojišťovny, služby</summary>
        <div class="content">
            <p><a href="https://bezpecnost.csas.cz/login/?client_id=georgeclient_cz" target="_blank">Česká spořitelna</a></p>
            <p><a href="https://www.pre.cz/cs/moje-pre/neprihlaseny-uzivatel/prihlaseni-uzivatele/" target="_blank">PRE online</a></p>
            <p><a href="https://www.equabanking.cz/IBS/" target="_blank">Equa</a></p>
            <p><a href="https://www.ostsaechsische-sparkasse-dresden.de/de/home/service/online-mobile-banking.html" target="_blank">Sparkasse</a></p>
            <p><a href="https://moje.goldengate.cz/dashboards" target="_blank">Goldengate</a></p>
            <p><a href="https://wise.com/login/" target="_blank">Wise</a></p>
            <p><a href="https://generaliceskacz.b2clogin.com/login.kz.generaliceska.cz/oauth2/v2.0/authorize?p=B2C_1_Prod_Flow&nonce=defaultNonce&redirect_uri=https://kz.generaliceska.cz/token&client_id=894f4eb9-5e98-4957-baa9-e1cc6350e9f5&prompt=login&scope=openid%20offline_access&response_type=code&login_hint=" target="_blank">Generali</a></p>
            <p><a href="https://cezonline.cez.cz/irj/portal/profil-uzivatele#/profil" target="_blank">Cez online</a></p>
        </div>
    </details>

    <details close>
        <summary> Úprava textu</summary>
        <div class="content">
            <p><a href="https://write-box.appspot.com/" target="_blank">Psani textu online 1</a></p>
            <p><a href="https://www.editpad.org/" target="_blank">Psani textu online 22</a></p>
            <p><a href="https://dillinger.io/" target="_blank">markdown editor online</a></p>
            <p><a href="http://petrfaltus.net/petr-faltus-konverze-textu-odstraneni-cestiny-z-textu.php" target="_blank">Odstranění diakritiky češtiny</a></p>
            <p><a href="https://nlp.fi.muni.cz/cz_accent/" target="_blank">Přidání diakritiky češtiny</a></p>
        </div>
    </details>


    <details close>
        <summary> Linux</summary>
        <div class="content">
            <p><a href="https://www.abclinuxu.cz/" target="_blank">Abclinuxu</a></p>
            <p><a href="https://www.root.cz/" target="_blank">Root</a></p>
            <p><a href="https://www.linuxexpres.cz/" target="_blank">Linuxexpress</a></p>
            <p><a href="http://www.fastlinux.eu/_archiv/index.php?page=linux026#Lock" target="_blank">Openbox</a></p>
            <p><a href="https://github.com/bedjan/debian/blob/master/poznamky/linux_cli.md" target="_blank">Github_linux</a></p>
            <p><a href="https://translate.google.cz/translate?hl=cs&sl=en&tl=cs&u=http%3A%2F%2Flinux.org" target="_blank">Linux.org</a></p>
            <p><a href="https://translate.google.cz/translate?hl=cs?sl=auto&sl=auto&tl=cs&u=https%3A%2F%2Fdistrowatch.com%2F&sandbox=1" target="_blank">Distrowatch</a></p>
            <p><a href="https://translate.google.cz/translate?sl=en&tl=cs&js=y&prev=_t&hl=cs&ie=UTF-8&u=linux.press&edit-text=&act=url" target="_blank">Linux_press</a></p>
            <p><a href="https://www.debian.org/index.cs.html" target="_blank">Debian</a></p>
            <p><a href="https://github.com/bedjan/debian" target="_blank">Debian - skripty a config</a></p>
            <p><a href="https://github.com/bedjan/debian/blob/master/poznamky/debian.md" target="_blank">Moje poznámky k debianu</a></p>
            <p><a href="https://github.com/bedjan/debian/blob/master/poznamky/linux.md" target="_blank">Obecně</a></p>
            <p><a href="https://github.com/bedjan/debian/blob/master/poznamky/linux_cli.md" target="_blank">Cli - příkazový řádek</a></p>
        </div>
    </details>


    <details close>
        <summary> Němčina</summary>
        <div class="content">
            <p><a href="https://www.youtube.com/channel/UC4LQ7gUVS5w45ba1VubmJpg/videos" target="_blank">Nemcina_youtube</a></p>
        </div>
    </details>

    <details close>
        <summary> Programování</summary>
        <div class="content">
            <p><a href="https://github.com/bedjan/" target="_blank">Github</a></p>
            <p><a href="https://github.com/bedjan/debian/blob/master/skripty/all.sh" target="_blank">Github_all</a></p>
            <p><a href="https://zdrojak.cz/" target="_blank">Zdrojak</a></p>
            <p><a href="https://www.itnetwork.cz/jak-zacit-programovat-tvorit-aplikace-programy" target="_blank">Jak začít programovat</a></p>
            <p><a href="https://www.startitup.cz/11-stranek-ktere-te-nauci-programovat-z-pohodli-domova/" target="_blank">Jak se naučit programovat</a></p>
            <p><a href="https://thinfi.com/" target="_blank">Thinfi</a></p>
            <p><a href="https://bitly.com/" target="_blank">Bitly</a></p>
            <p><a href="http://jdem.cz/" target="_blank">Jdem</a></p>
            <p><a href="https://www.protectedtext.com/" target="_blank">Protectedtext</a></p>
            <p><a href="https://dillinger.io/" target="_blank">Markdown editor</a></p>
            <p><a href="https://raw.githack.com/" target="_blank">Githack</a></p>
            <p><a href="https://tinyurl.com/app" target="_blank">Tinyurl</a></p>
            <p><a href="https://thinfi.com/" target="_blank">Link with password</a></p>
            <p><a href="https://bitly.com/" target="_blank">Link short</a></p>
            <p><a href="https://raw.githack.com/" target="_blank">Raw githack - dev</a></p>
            <p><a href="https://tinyurl.com/" target="_blank">Tinyurl</a></p>
            <p><a href="https://gist.io/" target="_blank">Gist.io i</a></p>
            <p><a href="https://uiwjs.github.io/react-md-editor/" target="_blank">Markdown editor</a></p>
        </div>
    </details>


    <details close>
        <summary> Github</summary>
        <div class="content">
            <p><a href="https://github.com/bedjan/akupresura/blob/master/akupresura_prvni_pomoc.md" target="_blank">Github_akupresura</a></p>
            <p><a href="https://github.com/bedjan/windows" target="_blank">Github_windows</a></p>
            <p><a href="https://github.com/bedjan/github/blob/master/README.md" target="_blank">Github_poznamky</a></p>
            <p><a href="https://gist.github.com/bedjan" target="_blank">Gist bedjan</a></p>
            <p><a href="https://github.com/bedjan/windows" target="_blank">Windows</a></p>
            <p><a href="https://github.com/bedjan/thinkpad_t410" target="_blank">Thinkpad_t410 poznámky, ovladače, ...</a></p>
            <p><a href="https://github.com/bedjan/sw/tree/master" target="_blank">Software</a></p>
            <p><a href="https://github.com/bedjan/hw/tree/master" target="_blank">Hardware</a></p>
        </div>
    </details>


    <details close>
        <summary> Životní prostředí</summary>
        <div class="content">
            <p><a href="http://www.enviweb.cz/" target="_blank">Enviweb</a></p>
            <p><a href="https://www.mzp.cz/" target="_blank">Mžp</a></p>
            <p><a href="http://arnika.org/zero-waste" target="_blank">Arnika zerowaste</a></p>
            <p><a href="http://www.czechzerowaste.cz/" target="_blank">Český blog o životě bez odpadu</a></p>
            <p><a href="http://zerowaste.bezobalu.org/" target="_blank">Bezobalu - o zerowaste</a></p>
            <p><a href="https://translate.google.cz/translate?sl=en&tl=cs&js=y&prev=_t&hl=cs&ie=UTF-8&u=zerowasteeurope.eu&edit-text=&act=url" target="_blank">Zero waste europe</a></p>
            <p><a href="https://www.greenglasses.cz/cs/business-category/zero-waste-obchody-jidlo-piti/" target="_blank">Zero waste obchody v čr</a></p>
        </div>
    </details>

    <details close>
        <summary> Minimalismus</summary>
        <div class="content">
            <p><a href="http://zijememinimalismem.cz/minimalismus-co-to-je-prosim-te/" target="_blank">Co je minimalismus</a></p>
            <p><a href="https://translate.google.cz/translate?hl=cs?sl=en&tl=cs&u=www.becomingminimalist.com/most-popular-posts/" target="_blank">Minimalismus ve světě</a></p>
        </div>
    </details>

    <details close>
        <summary> Psychologie</summary>
        <div class="content">
            <p><a href="https://psychologie.cz/clanky/" target="_blank">Psychologie</a></p>
            <p><a href="https://www.pronaladu.cz/" target="_blank">Pronaladu</a></p>
            <p><a href="https://e-psycholog.eu/archiv" target="_blank">Epsychologie</a></p>
            <p><a href="https://www.czso.cz/csu/czso/statistiky" target="_blank">Statistiky</a></p>
        </div>
    </details>


    <details close>
        <summary> Pedagogika</summary>
        <div class="content">
            <p><a href="http://htmlpreview.github.io/?https://rawcdn.githack.com/bedjan/skola/master/psychologie.html" target="_blank">Psychologie</a></p>
            <p><a href="http://htmlpreview.github.io/?https://rawcdn.githack.com/bedjan/skola/master/pedagogika.html" target="_blank">Pedagogika</a></p>
        </div>
    </details>
 
    <details close>
        <summary> Ostatní</summary>
        <div class="content">
            <p><a href="https://login.yahoo.com" target="_blank">Yahoo_email</a></p>
            <p><a href="https://www.seznam.cz/" target="_blank">Seznam</a></p>
            <p><a href="https://login.szn.cz/" target="_blank">Seznam_email</a></p>
            <p><a href="https://login.szn.cz/?serviceId=sweb&loggedURL=http://webadmin.sweb.cz/" target="_blank">Seznam_sweb</a></p>
            <p><a href="ftp://sweb.cz/" target="_blank">Seznam_ftp</a></p>
            <p><a href="https://uloz.to/login?key=logreg" target="_blank">Ulozto</a></p>
            <p><a href="https://www.vinted.cz/member/general/login?ref_url=%2F&__cf_chl_captcha_tk__=06e60c0838f1e7a7cfd5731145275268b2f8d333-1622574905-0-AWud745mERmzGs9xCMmTroN332YOMEB1XBdXrPdWOQb8DLHtVc_N12zsvulYXNXLllall03fFZTibqJOiwZAUE81L6fVqCpHHbu8-3razVqegPH9re-QEQZfqn7EzyWYJCjI2_q2ZBDKAAQnTeVwL2CdkgiuZvHgTuBg8Jd0sF0cqNidaj8mYoXU3bamrN5TBnyEWwS7CHFcmdRPpW1RfAfMRh40-evwGj-9EHUsXZrma23ik_BXVbhs2URb_mb-GVAXMaakFCT3XV5bppHKz3oSSQz9jTwc73S1Ym0l089x-QfVBsc4XUGYtDeykKIjTo1rm7h9RLIAkGRq8nPcFCcdZBznaFb779UgKQ-KLYomfrqAkRsCYDPIvNSiPs_R3WRyAR2Y-jpSJTaKdTb78nX5sCH8qsqJ9Q9ksbvWsFlMsUE15ua8lyGrnQsN8KmTWkanrIneuVfsDHqVyqzpRZNAvz5r-CDm1pA5x5M4FkYXcwPL_KOJ6fR96lPDrN1cWOAlMHY8oRnfqNJMqhEva-zZ-BC31NoXdbsXtNr6xJtd3qr331Bq237FcAWYvwHtAWUsXCwV_Dh95L4WR747luRvi9htOMEXK34CgQk1GWc52dUVjzxTaz52vX-YNdjiKSYxnYlWP1stZtGLkRBqNyWdj7uGW-kdlOaKtfBqkWEpvg1OgUdgB21cuPY-GsWc6Gyq2XGrc35xgFbVdouNQxg" target="_blank">Vinted</a></p>
            <p><a href="https://www.jobs.cz/" target="_blank">Jobs</a></p>
            <p><a href="https://www.jprace.cz/" target="_blank">Prace</a></p>
            <p><a href="http://janbednar.sweb.cz/" target="_blank">Web</a></p>
            <p><a href="https://sites.google.com/site/bedjansite/" target="_blank">Janbednar@osobni</a></p>
            <p><a href="https://www.bazos.cz/" target="_blank">Bazos</a></p>
        </div>
    </details>

    <details close>
        <summary> Firefox</summary>
        <div class="content">
            <p><a href="https://addons.mozilla.org/cs/firefox/addon/open-with/" target="_blank">open_with</a></p>
            
            <div class="code-block">
                mpv --ytdl-format=mp4 --ontop=yes --save-position-on-quit=yes --geometry=35%+0-50 --player-operation-mode=pseudo-gui –fs=no –cache-secs=180 –demuxer-readahead-secs=0 –ytdl-raw-options=no-check-certificate=

mpv --ytdl-format=worst --ontop=yes --save-position-on-quit=yes --geometry=35%+0-50 --player-operation-mode=pseudo-gui –fs=no –cache-secs=180 –demuxer-readahead-secs=0 –ytdl-raw-options=no-check-certificate=

mpv --ytdl-format=worst --ontop=yes --save-position-on-quit=yes --geometry=35%+0-50 --player-operation-mode=pseudo-gui –fs=no –cache-secs=180 –demuxer-readahead-secs=0 –ytdl-raw-options=no-check-certificate=
            </div>

            <p><a href="https://addons.mozilla.org/cs/firefox/addon/foxy-gestures/?utm_source=addons.mozilla.org&utm_medium=referral&utm_content=search" target="_blank">foxy gestures</a></p>
            <p><a href="https://addons.mozilla.org/cs/firefox/addon/ublock-origin/" target="_blank">ublock origin</a></p>
            <p><a href="https://addons.mozilla.org/cs/firefox/addon/bitwarden-password-manager/" target="_blank">Bitwarden</a></p>
            <p><a href="https://addons.mozilla.org/cs/firefox/addon/lastpass-password-manager/" target="_blank">lastpass</a></p>
            <p><a href="https://addons.mozilla.org/cs/firefox/addon/i-dont-care-about-cookies/" target="_blank">I don't care about cookies</a></p>
            <p><a href="https://addons.mozilla.org/cs/firefox/addon/to-google-translate/" target="_blank">to google translate</a></p>
        </div>
    </details>

    <details close>
        <summary> Další</summary>
        <div class="content">
            <p><a href="https://github.com/lastpass/lastpass-cli" target="_blank">lastpass cli</a></p>
            <p><a href="https://www.tsduchcov.cz/svoz-odpadu/svoz-brko/" target="_blank">biodopad</a></p>
            <p><a href="http://www.prepper.cz/" target="_blank">prepper</a></p>
            <p><a href="http://preppers.cz/forum/" target="_blank">prepper - forum</a></p>
        </div>
    </details>

</div>

</body>
</html>
