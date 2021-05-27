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
    SHOP . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/archive-product',
    BLOG . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/archive-blog',
];
