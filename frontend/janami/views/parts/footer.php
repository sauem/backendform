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
            <div class="col-md-3 col-12">
                <div class="footer-info mb-40">
                    <img height="60" width="240" src="<?= HelperFunction::getLogo('footer') ?>"
                         alt="<?= HelperFunction::setting('site_name') ?>"/>
                    <div class="footer-contacts txt-color-05 mt-25">
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
            <?php if (!empty($menuItems)) {
                foreach ($menuItems as $menuItem) {
                    $childrens = ArrayHelper::getValue($menuItem, 'children');
                    ?>

                    <div class="col-md-3 col-12">
                        <div class="footer-links mb-40">
                            <h6 class="h6-lg txt-color-01"><?= $menuItem['title'] ?></h6>
                            <ul class="clearfix txt-color-05">
                                <?php if ($childrens) {
                                    foreach ($childrens as $children) {
                                        ?>
                                        <li>
                                            <p>
                                                <a href="<?= HelperFunction::Link($children['type'], $children) ?>">
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
                    <h6 class="h6-lg txt-color-01">Fanpage:</h6>
                    <?= HelperFunction::setting('fanpage_script') ?>
                </div>
            </div>
        </div>
        <div class="bottom-footer txt-color-05">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="footer-copyright">
                        <p>&copy; 2021 Janami. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="bottom-footer-list text-right clearfix">
                        <li><p class="first-list-link">
                                <a href="<?= HelperFunction::setting('facebook') ?>">
                                    <i class="fab fa-facebook-f"></i> Facebook</a>
                            </p>
                        </li>
                        <li><p><a href="<?= HelperFunction::setting('twitter') ?>"><i class="fab fa-twitter"></i>
                                    Twitter</a></p></li>
                        <li><p><a href="<?= HelperFunction::setting('instagram') ?>"><i class="fab fa-instagram"></i>
                                    Instagram</a></p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
