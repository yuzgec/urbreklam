<?php

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Urban Reklam & Tabela", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'Urban Kabin İmalatı - Dashboard'
            'description'  => 'Urban Reklam, Krom, Kutu, Totem, Işıklı tabela imalatı, fuar standı, konuşma kürsüsü  yapmaktadır.. Lütfen iletişime geçiniz.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['tabela, konuşma kürsüsü, fuar standı, kutu, krom, totem, ışıklı tabela, imalat'],
            'url'         =>  false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'cQqsT-Pcm-w-BV_-iCuYXzVzei4ETGEODTB4IkoVv0s',
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Urban Reklam & Tabela', // set false to total remove
            'description'  => 'Urban Reklam, Krom, Kutu, Totem, Işıklı tabela imalatı, fuar standı, konuşma kürsüsü  yapmaktadır.. Lütfen iletişime geçiniz.', // set false to total remove
            'url'         =>  false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'Urban Reklam & Tabela',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Urban Reklam & Tabela', // set false to total remove
            'description'  => 'Urban Reklam, Krom, Kutu, Totem, Işıklı tabela imalatı, fuar standı, konuşma kürsüsü  yapmaktadır.. Lütfen iletişime geçiniz.', // set false to total remove
            'url'         =>  false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
