<?php
return [
    HOME => 'site/index',
    GUIDE => 'site/guide',
    CONTACT => 'site/contact',
    SERVICES => 'site/services',
    BLOG => 'site/archive',
    PRODUCT . '/<slug:[0-9a-zA-Z\-]+>' => 'site/archive',
    PRODUCT . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/product-detail',
    BLOG . '/<slug:[0-9a-zA-Z\-]+>' => 'site/archive',
    ARCHIVE . '/<slug:[0-9a-zA-Z\-]+>' => 'site/archive',
    BLOG . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/article-detail',
];
