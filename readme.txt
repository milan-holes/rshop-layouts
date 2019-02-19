Obsah:
------
1. General info
2. Struktura projektu
3. Vytvorenie novej podstranky
4. Fonty
5. Sass struktura


1. General info:
----------------
- fonty nacitavat len cez premenne (ziadne priame definicie), idealne cez mixin "fnt"
- nepouzivat ziadne prefixy pre styly (autoprefixer sa o to postara)
- pre jednoduchost sa generuje iba jedno css, ale je potrebne aby si styly rozbijal pre jednotlive podstranky (index, listing, detail), my si potom budeme generovat zvlast css pre kazdu z tychto stranok
- takisto je to s javascriptom - tiez ho treba delit ("resources/js/parts/*.js" alebo "resources/js/default.js")
- mixiny a premenne si prdavaj podla potreby v ramci "resources/sass/init" priecinku
- externe js a css treba pridat v "gulpfile.js" do pola "externalCss" alebo "externalJs", gulp z nich potom vygeneruje jeden subor


2. Struktura projektu:
----------------------
- data => dummy data
- defaults => default layout + styly + js (tu nic nemenit)
- elements
- helpers
- layouts => default layout (idealne nic nemenit)
- resources
- templates => template-y pre jednotlive podstranky
- config.php => definovanie novych podstranok


3. Vytvorenie novej podstranky:
-------------------------------
- v "config.php" pridat do pola $pages:
    - template => cesta k template-u
    - layout => okrem nakupneho procesu vzdy "default"
- v priecinku "templates" vytvorit samotny template podla cesty, ktoru si definoval v konfigu


4. Fonty:
---------
- fonty pridat do "resources/fonts"
- nasledne pridat definicie do "resources/sass/base/general/_fonts.scss"
- potom pridat font do premennych v "resources/sass/init/_variables.scss"

- icomoon netreba nikde nacitavat, len ho rozbalit do priecinku "resources/fonts"
    - treba aby boli vsetky subory priamo v priecinku "icomoon"
    - treba vygenerovat scss (v nastaveniach icomoon)


5. Sass struktura:
------------------
- base => styly ktore sa vyuzivaju napriek celym projektom
    |-> elements => vseobecne stylovacky pre linky, modaly, tlacitka, ikony...
    |-> general => fonty, helper classes, layout, print...
    |-> plugins => prebijanie stylov pre pluginy
- init => iba premenne a mixiny / funkcie
- parts => samostatne sekcie / podstranky shopu
    - co sa tyka hlavicky, nech je v priecinku "header", to iste footer, index...
- templates => v skutocnosti mixiny s castou stylovania, ktora sa opakuje na viacerych podstrankach
   - cize napr. tu mozem mat styly pre box s vyhodami a potom ho nacitat pomocou mixinu aj na detaile, aj na listingu

6. Gulp
- prikazy:
    - gulp => spusti watch, takze pri zmene .scss suboru automaticky vygeneruje nanovo vysledne css
    - gulp copy => skopiruje resources (fonty a obrazky)
    - gulp install => kompletka (skopiruje resources, vygeneruje css aj js)
- premenne "externalCss" a "externalJs" => tu treba zadefinovat cesty k vsetkym externym css a js ktore sa budu pouzivat