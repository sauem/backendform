<?php
return [
    HOME => 'site/index',
    SEARCH => 'site/search',
    CONTACT => 'site/contact',
    SHOP => 'site/shop',
    ARTICLES => 'site/articles',
    FAQS => 'site/faqs',
    CART => 'site/cart',
    CHECKOUT => 'site/checkout',
    BUYING_GUIDE => 'site/buying-guide',

    // page
    'product-filter' => 'product-filter',
    'product-filter/view' => 'product-filter/view',
    'blog-filter' => 'blog-filter',
    'blog-filter/view' => 'blog-filter/view',
    'archive-filter' => 'archive-filter',
    'archive-filter/view' => 'archive-filter/view',
    ARTICLE . '/<archive:[0-9a-zA-Z\-]+>' => 'site/archive',
    ARTICLE . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/detail',
    SHOP . '/<archive:[0-9a-zA-Z\-]+>' => 'site/archive',
    SHOP . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/detail',

];
