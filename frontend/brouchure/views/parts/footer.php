<?php

use common\helper\HelperFunction;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

$menu = HelperFunction::getMenu('footer');
$menuItems = [];
if ($menu) {
    $menuItems = Json::decode(ArrayHelper::getValue($menu, 'items'));
}
?>

<footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">

    <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text clearfix">
                        <h3 class="widget-title"><?= Yii::t('app', 'about_us') ?></h3>
                        <div class="textwidget widget-text">
                            <p><?= HelperFunction::setting('site_description', true) ?></p>
                            <div class="call_detail">
                                <small>
                                    <a href="tel:<?= HelperFunction::setting('hotline') ?>">
                                        <i class="ti ti-headphone"></i> <?= HelperFunction::setting('hotline') ?>
                                    </a>
                                </small>
                                <br>
                                <small>
                                    <a href="mailto:<?= HelperFunction::setting('email') ?>">
                                        <i class="ti ti-email"></i> <?= HelperFunction::setting('email') ?>
                                    </a>
                                </small>
                                <br>
                                <small>
                                    <i class="ti ti-location-arrow"></i> <?= HelperFunction::setting('address_1', true) ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($menuItems as $item) {
                    $children = isset($item['children']) ? $item['children'] : null;
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title"><?= $item['title'] ?></h3>
                            <ul id="menu-footer-quick-links" class="menu">
                                <?php foreach ($children as $child) {
                                    ?>
                                    <li>
                                        <a href="<?= HelperFunction::Link($child['type'], $child) ?>">
                                            <?= $child['title'] ?>
                                        </a>
                                    </li>
                                    <?php
                                } ?>
                            </ul>
                        </div>
                    </div>

                    <?php
                } ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget-latest-tweets clearfix">
                        <h3 class="widget-title">Fanpage</h3>
                        <div class="latest-tweets">
                            <div class="newsletter-form">
                                <div class="fb-page" data-href="https://www.facebook.com/DEMO-1790822874558285"
                                     data-tabs=""
                                     data-width="500" data-height="" data-small-header="false"
                                     data-adapt-container-width="true" data-hide-cover="false"
                                     data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/DEMO-1790822874558285"
                                                class="fb-xfbml-parse-ignore"><a
                                                href="https://www.facebook.com/DEMO-1790822874558285">DEMO</a>
                                    </blockquote>
                                </div>
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous"
                                        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=2069666556634206&autoLogAppEvents=1"
                                        nonce="QdbvfnwA"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text copyright ttm-textcolor-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-lg-flex align-items-center justify-content-between text-center">
                        <div class="order-1">
                            <div class="cpy-text">Copyright © 2021 <a href="#">Axacus</a>. All rights reserved.</div>
                        </div>
                        <div class="order-2 footer-logo">
                            <img width="100px" class="img-fluid" src="/images/mk.png" alt="logo">
                        </div>
                        <div class="order-3">
                            <div class="social-icons">
                                <ul class="social-icons list-inline">
                                    <li><a class="tooltip-top" href="<?= HelperFunction::setting('facebook')?>" rel="noopener" aria-label="facebook"
                                           data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="<?= HelperFunction::setting('linkedin')?>" rel="noopener" aria-label="linkedin"
                                           data-tooltip="Linkedin"><i class="ti ti-linkedin"></i></a></li>
                                    <li><a class="tooltip-top" href="<?= HelperFunction::setting('youtube')?>" rel="noopener" aria-label="Youtube"
                                           data-tooltip="Youtube"><i class="ti ti-youtube"></i></a></li>
                                    <li><a class="tooltip-top" href="<?= HelperFunction::setting('twitter')?>" rel="noopener" aria-label="twitter"
                                           data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
