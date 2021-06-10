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
    PRODUCT . '/<archive:[0-9a-zA-Z\-]+>' => 'site/archive',
    ARTICLE . '/<archive:[0-9a-zA-Z\-]+>' => 'site/archive'
];
