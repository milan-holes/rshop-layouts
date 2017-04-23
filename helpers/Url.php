<?php
class Url {
    /**
     * Url keys
     * @var array
     */
    protected $_urlKeys = [
        'Pages' => [
            'index',
            'contact',
            '404'
        ],

        'Eshop' => [
            'userAccount',
            'userLogout',
            'userLogin',
            'userEdit',
            'userDetail',
            'userAddresses',
            'userBranches',
            'changePassword',
            'lostPassword',
            'registration',
            'orders',
            'invoices',
            'claims',
            'newsletter',
            'orderDetail',
            'claimDetail',
            'claimForm',
            'wishlist',
            'watchdog',
            'createAddress'
        ],

        'Catalog' => [
            'product',
            'listing',
            'autocomplete',
            'search',
            'compare'
        ],

        'Shopping' => [
            'cart',
            'form',
            'modules',
            'confirm',
            'success',
            'registration'
        ]
    ];

    /**
     * Build URL
     *
     * @param mixed $url
     * @return string
     */
    public function build($url)
    {
        if (is_array($url)) {

        } else {
            return $url . '.html';
        }

        return $url;
    }
}