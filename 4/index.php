<?php

/**
 * 4.1
 * Дочерние темы нужны чтоб родетельская норм обновлялась. Яркий пример WooCommerce
 */

/**
 * 4.2
 */
$query = new WP_Query( [
    'tax_query' => [
        'relation' => 'AND',
        [
            'taxonomy' => 'foo',
            'operator' => 'EXISTS',
        ],
        [
            'taxonomy' => 'bar',
            'operator' => 'EXISTS',
        ]
    ]
] );

/**
 * 4.3
 * Вообще я всегда думал, что чтоб сделать плагин по фэньшую надо сделать как тут https://wp-kama.ru/handbook/plugin/osnovy
 * Ну https://github.com/DevinVinson/WordPress-Plugin-Boilerplate
 * И видел что многие именно по этому шаблону делают...
 * Но там ниче про namespace нету... Видимо я отстал, но если что покажете как надо, я сделаю. 
 * 
 * Вот хуки https://wp-kama.ru/hooks/woocommerce-hooks-db
 * наверное вешать надо на woocommerce_email_order_details но это не точно =)
 * Надо тестить)
 */


