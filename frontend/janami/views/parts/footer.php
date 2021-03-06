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
<footer id="footer-1" class="bg-color-01 footer division">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <img height="60" width="240" src="<?= HelperFunction::getLogo('footer') ?>"
                     alt="<?= HelperFunction::setting('site_name') ?>"/>
                <p class="mt-2 mb-0 do"><?= HelperFunction::setting('site_description', true) ?></p>
                <p class="mt-2 xam"><?= HelperFunction::setting('about_us') ?></p>
                <div class="divider w-50px"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 col-12">
                <div class="footer-info mb-40">
                    <div class="footer-contacts">
                        <p>
                            <span class="icon-bx">
                                <img src="/img/icons/map.svg">
                            </span>
                            <span>
                                <?= nl2br(HelperFunction::setting('address_1', true)) ?>
                            </span>
                        </p>
                        <p>
                             <span class="icon-bx">
                                    <img src="/img/icons/phone.svg">
                                </span>
                            <a href="tel:<?= HelperFunction::setting('hotline_2') ?>">
                                <?= HelperFunction::setting('hotline_2') ?>
                            </a>
                        </p>
                        <p class="email" href="mailto:<?= HelperFunction::setting('email') ?>">
                            <span class="icon-bx">
                                <img src="/img/icons/email.svg">
                            </span>
                            <a href="mailto:<?= HelperFunction::setting('email') ?>"><?= HelperFunction::setting('email') ?></a>
                        </p>
                    </div>

                </div>
            </div>
            <?php if (!empty($menuItems)) {
                foreach ($menuItems as $menuItem) {
                    $childrens = ArrayHelper::getValue($menuItem, 'children');
                    ?>

                    <div class="col-md-3 col-12">
                        <div class="footer-links mb-40">
                            <h6 class="h6-lg do"><?= $menuItem['title'] ?></h6>
                            <ul class="clearfix txt-color-05">
                                <?php if ($childrens) {
                                    foreach ($childrens as $children) {
                                        ?>
                                        <li>
                                            <p>
                                                <a
                                                   href="<?= HelperFunction::Link($children['type'], $children) ?>">
                                                    <?= $children['title'] ?>
                                                </a>
                                            </p>
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
            <div class="col-md-2">
                <div class="footer-form mb-20">
                    <h6 class="h6-lg do">Follow me</h6>
                    <ul class="bottom-footer-list text-right clearfix">
                        <li><p class="first-list-link">
                                <a href="<?= HelperFunction::setting('facebook') ?>">
                                    <i class="fab fa-facebook-f"></i></a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="<?= HelperFunction::setting('youtube') ?>">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </p>
                        </li>
                        <li>
                            <p class="last-li">
                                <a href="<?= HelperFunction::setting('instagram') ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom-footer txt-color-05">
            <div class="row d-flex align-items-center">
                <div class="col-12 text-center">
                    <p>&copy; 2021 Janami. All Rights Reserved</p>

                </div>

            </div>
        </div>
    </div>
</footer>
