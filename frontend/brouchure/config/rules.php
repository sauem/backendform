<?php
return [
    HOME => 'site/index',
    CONTACT => 'site/contact',
    // page
    SERVICES => 'site/archive',
    SERVICES . '/<archive:[0-9a-zA-Z\-]+>' => 'site/archive',
    ARTICLE . '/<archive:[0-9a-zA-Z\-]+>' => 'site/archive',
    ARTICLE . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/detail-blog',
    SERVICES . '/<archive:[0-9a-zA-Z\-]+>/<slug:[0-9a-zA-Z\-]+>' => 'site/detail-service'
];
