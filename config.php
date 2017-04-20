<?php
/*
 *
 * CONFIGURATIONS
 *
 */
$pages = [
    'index' => [
        'template' => 'Pages/index',
        'layout' => 'default'
    ],
    'listing' => [
        'template' => 'Catalog/listing',
        'layout' => 'default'
    ],
    'product' => [
        'template' => 'product',
        'layout' => 'default'
    ]
];

/*
 *
 * FUNCTIONS
 *
 */
function __($string, $args = null)
{
    if (!$string) {
        return null;
    }

    $arguments = func_num_args() === 2 ? (array)$args : array_slice(func_get_args(), 1);

    $replace = [];
    foreach ($arguments as $token => $value) {
        // convert an array to a CSV string
        if (is_array($value)) {
            $value = '"' . implode('", "', $value) . '"';
        }
        $replace['{' . $token . '}'] = $value;
    }

    return strtr($string, $replace);
}

$navig = array(
    '1' => array(
        'name' => 'Záhrada',
        'link' => 'listing.php',
        'img' => 'webroot/img/tmp/cat-01.png',
        'sub' => array(
            '1' => array(
                'name' => 'Stromy',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '2' => array(
                'name' => 'Slimáky',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '3' => array(
                'name' => 'Lopaty',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '4' => array(
                'name' => 'Kosačky',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '5' => array(
                'name' => 'Stromy',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '6' => array(
                'name' => 'Slimáky',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '7' => array(
                'name' => 'Lopaty',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '8' => array(
                'name' => 'Kosačky',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            )
        )
    ),
    '2' => array(
        'name' => 'Elektronáradie',
        'link' => 'listing.php',
        'img' => 'webroot/img/tmp/cat-02.png',
        'sub' => array(
            '1' => array(
                'name' => 'Brúsky',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '2' => array(
                'name' => 'Nabíjačky',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '3' => array(
                'name' => 'Vŕtačky a kladivá',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '4' => array(
                'name' => 'Trafopájky a pištole',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            )
        )
    ),
    '3' => array(
        'name' => 'Stavba',
        'link' => 'listing.php',
        'img' => 'webroot/img/tmp/cat-03.png',
        'sub' => array(
            '1' => array(
                'name' => 'Steny',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '2' => array(
                'name' => 'Podlahy',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '3' => array(
                'name' => 'Hrubá stavba',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '4' => array(
                'name' => 'Strecha',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            )
        )
    ),
    '4' => array(
        'name' => 'Stavba',
        'link' => 'listing.php',
        'img' => 'webroot/img/tmp/cat-04.png',
        'sub' => array(
            '1' => array(
                'name' => 'Steny',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '2' => array(
                'name' => 'Podlahy',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '3' => array(
                'name' => 'Hrubá stavba',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '4' => array(
                'name' => 'Strecha',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            )
        )
    ),
    '5' => array(
        'name' => 'Stavba',
        'link' => 'listing.php',
        'img' => 'webroot/img/tmp/cat-05.png',
        'sub' => array(
            '1' => array(
                'name' => 'Steny',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '2' => array(
                'name' => 'Podlahy',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '3' => array(
                'name' => 'Hrubá stavba',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '4' => array(
                'name' => 'Strecha',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            )
        )
    ),
    '6' => array(
        'name' => 'Tralala',
        'link' => 'listing.php',
        'img' => 'webroot/img/tmp/cat-06.png',
        'sub' => array(
            '1' => array(
                'name' => 'Steny',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '2' => array(
                'name' => 'Podlahy',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '3' => array(
                'name' => 'Hrubá stavba',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '4' => array(
                'name' => 'Strecha',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            )
        )
    ),
    '7' => array(
        'name' => 'Elektronáradie',
        'link' => 'listing.php',
        'img' => 'webroot/img/tmp/cat-02.png',
        'sub' => array(
            '1' => array(
                'name' => 'Brúsky',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '2' => array(
                'name' => 'Nabíjačky',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '3' => array(
                'name' => 'Vŕtačky a kladivá',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            ),
            '4' => array(
                'name' => 'Trafopájky a pištole',
                'link' => 'listing.php',
                'img' => 'webroot/img/tmp/product-01.jpg'
            )
        )
    ),
);

$minicart = array(
    '1' => array(
        'name' => 'Farba do kancelárskej pečiatky, čierna 28 ml',
        'quantity' => '2',
        'price' => '1,80 €',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product-p8'
    ),
    '2' => array(
        'name' => 'Farba do kancelárskej pečiatky, čierna 28 ml',
        'quantity' => '1',
        'price' => '22,60 €',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product-p8'
    ),
    '3' => array(
        'name' => 'Farba do kancelárskej pečiatky, čierna 28 ml',
        'quantity' => '1',
        'price' => '6,40 €',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product-p8'
    ),
    '4' => array(
        'name' => 'Farba do kancelárskej pečiatky, čierna 28 ml',
        'quantity' => '3',
        'price' => '12,50 €',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product-p8'
    )
);

$brands = array(
    '1' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-01.png',
        'link' => 'brand-p8'
    ),
    '2' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-02.png',
        'link' => 'brand-p8'
    ),
    '3' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-03.png',
        'link' => 'brand-p8'
    ),
    '4' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-04.png',
        'link' => 'brand-p8'
    ),
    '5' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-05.png',
        'link' => 'brand-p8'
    ),
    '6' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-06.png',
        'link' => 'brand-p8'
    ),
    '7' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-07.png',
        'link' => 'brand-p8'
    ),
    '8' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-08.png',
        'link' => 'brand-p8'
    ),
    '9' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-09.png',
        'link' => 'brand-p8'
    ),
    '10' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-10.png',
        'link' => 'brand-p8'
    ),
    '11' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-11.png',
        'link' => 'brand-p8'
    ),
    '12' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-12.png',
        'link' => 'brand-p8'
    ),
    '13' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-06.png',
        'link' => 'brand-p8'
    ),
    '14' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-07.png',
        'link' => 'brand-p8'
    ),
    '15' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-08.png',
        'link' => 'brand-p8'
    ),
    '16' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-09.png',
        'link' => 'brand-p8'
    ),
    '17' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-10.png',
        'link' => 'brand-p8'
    ),
    '18' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-11.png',
        'link' => 'brand-p8'
    ),
    '19' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-12.png',
        'link' => 'brand-p8'
    )
);

$index_banner = array(
    '1' => array(
        'name' => 'Banner 01',
        'img' => 'webroot/img/tmp/banner-big-01.png',
        'link' => '#'
    ),
    '2' => array(
        'name' => 'Banner 02',
        'img' => 'webroot/img/tmp/banner-big-01.png',
        'link' => '#'
    )
);

$article_news = array(
    '1' => array(
        'name' => 'Dôležité oznámenie k chybne označeným rukaviciam STREND PRO 313489',
        'img' => 'webroot/img/tmp/art-01.jpg',
        'link' => '#',
        'perex' => 'Na základe oznámenia o kontrole Ochranných rukavíc STREND PRO 313489 orgánom SOI sme prijali riešenie situácie'
    ),
    '2' => array(
        'name' => 'Dôležité oznámenie k chybne označeným rukaviciam STREND PRO 313489',
        'img' => 'webroot/img/tmp/art-01.jpg',
        'link' => '#',
        'perex' => 'Na základe oznámenia o kontrole Ochranných rukavíc STREND PRO 313489 orgánom SOI sme prijali riešenie situácie'
    ),
    '3' => array(
        'name' => 'Dôležité oznámenie k chybne označeným rukaviciam STREND PRO 313489',
        'img' => 'webroot/img/tmp/art-01.jpg',
        'link' => '#',
        'perex' => 'Na základe oznámenia o kontrole Ochranných rukavíc STREND PRO 313489 orgánom SOI sme prijali riešenie situácie'
    ),
    '4' => array(
        'name' => 'Dôležité oznámenie k chybne označeným rukaviciam STREND PRO 313489',
        'img' => 'webroot/img/tmp/art-01.jpg',
        'link' => '#',
        'perex' => 'Na základe oznámenia o kontrole Ochranných rukavíc STREND PRO 313489 orgánom SOI sme prijali riešenie situácie'
    )
);

$art_banner = array(
    'name' => 'Katalóg produktov 2015',
    'img' => 'webroot/img/tmp/banner-katalog-01.png',
    'link' => '#',
    'perex' => 'Prezrite si aktuálny celoročný katalóg produktov'
);

$products = array(
    '1' => array(
        'name' => 'Kompresor STREND PRO AC V50, 2.2kW, 50 lit,CE',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => true,
        'price_old' => false,
        'price_actual' => '112,00 €',
        'availability' => '> 20 ks na sklade'
    ),
    '2' => array(
        'name' => 'Bruska SKIL 9005 AA • 550W, 115 mm, uhlová',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => false,
        'price_old' => false,
        'price_actual' => '58,40 €',
        'availability' => '> 20 ks na sklade'
    ),
    '3' => array(
        'name' => 'Nabijacka Telwin Geminy 10',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => 'action',
        'new' => false,
        'price_old' => '76,39 €',
        'price_actual' => '31,01 €',
        'availability' => '> 20 ks na sklade'
    ),
    '4' => array(
        'name' => 'Bruska Worcraft BG12-125, 120W, 125x16x12,7 mm, stolová',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => false,
        'price_old' => false,
        'price_actual' => '61,23 €',
        'availability' => '> 20 ks na sklade'
    ),
    '5' => array(
        'name' => 'Kompresor STREND PRO AC V50, 2.2kW, 50 lit,CE',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => true,
        'price_old' => false,
        'price_actual' => '112,00 €',
        'availability' => '> 20 ks na sklade'
    ),
    '6' => array(
        'name' => 'Bruska SKIL 9005 AA • 550W, 115 mm, uhlová',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => false,
        'price_old' => false,
        'price_actual' => '58,40 €',
        'availability' => '> 20 ks na sklade'
    ),
    '7' => array(
        'name' => 'Nabijacka Telwin Geminy 10',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => 'action',
        'new' => false,
        'price_old' => '76,39 €',
        'price_actual' => '31,01 €',
        'availability' => '> 20 ks na sklade'
    ),
    '8' => array(
        'name' => 'Bruska Worcraft BG12-125, 120W, 125x16x12,7 mm, stolová',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => false,
        'price_old' => false,
        'price_actual' => '61,23 €',
        'availability' => '> 20 ks na sklade'
    ),
    '9' => array(
        'name' => 'Kompresor STREND PRO AC V50, 2.2kW, 50 lit,CE',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => true,
        'price_old' => false,
        'price_actual' => '112,00 €',
        'availability' => '> 20 ks na sklade'
    ),
    '10' => array(
        'name' => 'Bruska SKIL 9005 AA • 550W, 115 mm, uhlová',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => false,
        'price_old' => false,
        'price_actual' => '58,40 €',
        'availability' => '> 20 ks na sklade'
    ),
    '11' => array(
        'name' => 'Nabijacka Telwin Geminy 10',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => 'action',
        'new' => true,
        'price_old' => '76,39 €',
        'price_actual' => '31,01 €',
        'availability' => '> 20 ks na sklade'
    ),
    '12' => array(
        'name' => 'Bruska Worcraft BG12-125, 120W, 125x16x12,7 mm, stolová',
        'img' => 'webroot/img/tmp/product-01.jpg',
        'link' => 'product.php',
        'code' => 'KSP200001',
        'desc' => 'Tento malý  kompresor má novátorský dizajn, excelentné spracovanie a rôzne výhody ako ľahko skladnú konštrukciu ',
        'weight' => '39 kg',
        'package' => '1 ks',
        'action' => false,
        'new' => false,
        'price_old' => false,
        'price_actual' => '61,23 €',
        'availability' => '> 20 ks na sklade'
    )
);

$product = array(
    'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
    'img' => 'webroot/img/tmp/product-02.jpg',
    'link' => 'product.php',
    'code' => 'KSP200001',
    'desc' => 'Tento malý kompresor má novátorský dizajn, excelentné spracovanie a výhody: kompaktná konštrukcia, nízka hmotnosť, jednoduchá obsluha, vysoká bezpečnosť a nízka hlučnosť. Jeho použitie ma široký rozsah ako v obchode so strojmi, v chemickom priemysle, sprejovaní, dekorácií, automatickom riadiacom systéme a v ďalších odboroch, kde je požadovaný stlačený vzduch.',
    'weight' => '39 kg',
    'package' => '1 ks',
    'action' => 'action',
    'new' => true,
    'price_old' => '120,45 €',
    'price_actual' => '113,00 €',
    'availability' => '> 20 ks na sklade',
    'brand_name' => 'Tokoz',
    'brand_img' => 'webroot/img/tmp/brand-01.jpg',
    'brand_link' => '#',
    'gallery' => array(
        '1' => array(
            'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
            'big' => 'webroot/img/tmp/product-02.jpg',
            'small' => 'webroot/img/tmp/product-02.jpg'
        ),
        '2' => array(
            'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
            'big' => 'webroot/img/tmp/product-01.jpg',
            'small' => 'webroot/img/tmp/product-01.jpg'
        ),
        '3' => array(
            'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
            'big' => 'webroot/img/tmp/product-01.jpg',
            'small' => 'webroot/img/tmp/product-01.jpg'
        ),
        '4' => array(
            'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
            'big' => 'webroot/img/tmp/product-01.jpg',
            'small' => 'webroot/img/tmp/product-01.jpg'
        ),
        '5' => array(
            'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
            'big' => 'webroot/img/tmp/product-01.jpg',
            'small' => 'webroot/img/tmp/product-01.jpg'
        ),
        '6' => array(
            'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
            'big' => 'webroot/img/tmp/product-01.jpg',
            'small' => 'webroot/img/tmp/product-01.jpg'
        ),
        '7' => array(
            'name' => 'Kompresor STREND PRO ACV50, 2.2kW, 50 lit, CE',
            'big' => 'webroot/img/tmp/product-01.jpg',
            'small' => 'webroot/img/tmp/product-01.jpg'
        ),
    ),
    'video' => 'https://www.youtube.com/embed/nfWlot6h_JM?autoplay=1',
    'discount' => array(
        '5' => '111,00 €',
        '10' => '108,00 €',
        '15' => '105,00 €',
    )
);