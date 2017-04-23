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
        'template' => 'Catalog/product',
        'layout' => 'default'
    ],
    'manufacturer' => [
        'template' => 'Catalog/brand-detail',
        'layout' => 'default'
    ],
    'manufacturers' => [
        'template' => 'Catalog/brands',
        'layout' => 'default'
    ],
    'kontakt' => [
        'template' => 'Pages/contact',
        'layout' => 'default'
    ],
    'article' => [
        'template' => 'Content/article-detail',
        'layout' => 'default'
    ],
    'articles' => [
        'template' => 'Content/articles',
        'layout' => 'default'
    ],
    'cart-1' => [
        'template' => 'Shopping/cart-1',
        'layout' => 'shopping_proccess'
    ],
    'cart-2' => [
        'template' => 'Shopping/cart-2',
        'layout' => 'shopping_proccess'
    ],
    'cart-3' => [
        'template' => 'Shopping/cart-3',
        'layout' => 'shopping_proccess'
    ],
    'cart-4' => [
        'template' => 'Shopping/cart-4',
        'layout' => 'shopping_proccess'
    ],
    'cart-success' => [
        'template' => 'Shopping/cart-success',
        'layout' => 'shopping_proccess'
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
