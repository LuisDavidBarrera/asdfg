<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://inicio.comercializadoraegs.com/', 
    'ck_75fc70c9507d18607d5a701c95a1f3f710a7dec3', 
    'cs_2a5c0df1e6e384d71a26dda272633eec7526244a',
    [
        'version' => 'wc/v3',
    ]
);

// subir categorias

$titulos = array("nombrecategoria" => "uno", 
                "nombrecategoria" => "dos",
                "nombrecategoria" => "dedwhj");
for($i = 0; $i <= count($titulos); $i ++){
    
    $data = [
    
        'name' => ''.$titulos["nombrecategoria"].'',
        'image' => [
        'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
     ]
    ];
 } 

     






print_r($woocommerce->post('products/categories', $data));


// subir productos 

/* $data = [
    'name' => 'Premium Quality',
    'type' => 'simple',
    'regular_price' => '21.99',
    'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
    'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
    'categories' => [
        [
            'id' => 9
        ],
        [
            'id' => 14
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
        ]
    ]
];

print_r($woocommerce->post('products', $data));

*/