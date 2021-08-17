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


    // page
    ARTICLE . '/<archive:[0-9a-zA-Z\-]+>' => 'site/archive',
    ARTICLE . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/detail',
    SHOP . '/<archive:[0-9a-zA-Z\-]+>' => 'site/archive',
    SHOP . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/detail',

];
