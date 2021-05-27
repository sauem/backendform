<?php
return [
    HOME => 'site/index',
    SEARCH => 'site/search',
    CONTACT => 'site/contact',
    PRODUCT . '/<slug:[0-9a-zA-Z\-]+>' => 'site/archive',
    PRODUCT . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/product-detail',
    BLOG . '/<slug:[0-9a-zA-Z\-]+>' => 'site/archive',
    ARCHIVE . '/<slug:[0-9a-zA-Z\-]+>' => 'site/archive',
    BLOG . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/article-detail',
    SHOP => 'site/shop',
    ARTICLES => 'site/articles',
    FAQS => 'site/faqs',
    CART => 'site/cart',
    CHECKOUT => 'site/checkout',
];
