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
                <p class="mt-2 do"><?= HelperFunction::setting('site_description', true) ?></p>
            </div>
            <div class="col-md-3 col-12">
                <div class="footer-info mb-40">
                    <div class="footer-contacts">
                        <p>
                            <img src="/img/icons/map.svg"> <?= HelperFunction::setting('address_1', true) ?>
                        </p>
                        <p>
                            <a href="tel:<?= HelperFunction::setting('hotline_1') ?>">
                                <img src="/img/icons/phone.svg"> <?= HelperFunction::setting('hotline_1') ?>
                            </a>
                        </p>
                        <p class="email" href="mailto:<?= HelperFunction::setting('email') ?>">
                            <img src="/img/icons/email.svg"> <?= HelperFunction::setting('email') ?>
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
                                                <a class="text-dark" href="<?= HelperFunction::Link($children['type'], $children) ?>">
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
            <div class="col-md-3">
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
                                <a href="<?= HelperFunction::setting('twitter') ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </p>
                        </li>
                        <li>
                            <p>
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
