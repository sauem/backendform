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


<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Column -->
                <div class="big-column col-md-3">
                    <div class="footer-widget logo-widget">
                        <div class="logo">
                            <a href="/">
                                <img src="<?= HelperFunction::getLogo('footer') ?>"
                                     alt="<?= HelperFunction::setting('site_name') ?>"/>
                            </a>
                            <br>
                            <?= nl2br(HelperFunction::setting('site_description')) ?>
                        </div>
                        <div class="call">
                            <p>
                                <a href="tel:<?= HelperFunction::setting('hotline_1') ?>">
                                    <span class="icofont-phone"></span> <?= HelperFunction::setting('hotline_1') ?>
                                </a>
                            </p>
                            <p>
                                <span class="icofont-location-pin"></span> <?= HelperFunction::setting('address_1', true) ?>
                            </p>
                            <p class="email" href="mailto:<?= HelperFunction::setting('email') ?>">
                                <span class="icofont-email"></span> <?= HelperFunction::setting('email') ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="big-column col-md-5">
                    <div class="row">
                        <?php if (!empty($menuItems)) {
                            foreach ($menuItems as $menuItem) {
                                $childrens = ArrayHelper::getValue($menuItem, 'children');
                                ?>
                                <div class="col-md-6">
                                    <div class="footer-widget links-widget">
                                        <h5><?= $menuItem['title'] ?></h5>
                                        <ul class="list-link">
                                            <?php if ($childrens) {
                                                foreach ($childrens as $children) {
                                                    ?>
                                                    <li>
                                                        <a href="<?= HelperFunction::Link($children['type'], $children) ?>">
                                                            <?= $children['title'] ?>
                                                        </a>
                                                    </li>
                                                    <?php
                                                }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                            }
                        } ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget newsletter-widget">
                        <h5>Fanpage</h5>
                        <!-- Newsletter Form -->
                        <?= HelperFunction::setting('fanpage_script')?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="bottom-inner">
                    <div class="row clearfix">

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="copyright">
                                © 2021 <strong>3CE</strong>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <ul class="social-nav">
                                <li><a href="<?= HelperFunction::setting('twitter') ?>" class="icofont-twitter"></a>
                                </li>
                                <li><a href="<?= HelperFunction::setting('facebook') ?>" class="icofont-facebook"></a>
                                </li>
                                <li><a href="<?= HelperFunction::setting('linkedin') ?>" class="icofont-linkedin"></a>
                                </li>
                                <li><a href="<?= HelperFunction::setting('youtube') ?>" class="icofont-play-alt-1"></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
