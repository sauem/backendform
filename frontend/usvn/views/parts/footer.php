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
<footer class="footer footer-<?= isset(Yii::$app->params['footer_type']) == 'light' ? 'light' : 'dark' ?>">
    <div class="footer-primary">
        <div class="container">
            <div class="row">

                <?php if (!empty($menuItems)) {
                    foreach ($menuItems as $item) {
                        $childrens = ArrayHelper::getValue($item, 'children', []);
                        ?>
                        <div class="col-6 col-md-3 footer-widget footer-widget-nav">
                            <h6 class="footer-widget__title"><?= $item['title'] ?></h6>
                            <div class="footer-widget__content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <?php if (!empty($childrens)) {
                                            foreach ($childrens as $children) {
                                                ?>
                                                <li>
                                                    <a href="<?= HelperFunction::Link($children['type'], $children) ?>"><?= $children['title'] ?></a>
                                                </li>
                                                <?php
                                            }
                                        } ?>
                                    </ul>
                                </nav>
                            </div><!-- /.footer-widget__content -->
                        </div>
                        <?php
                    }
                } ?>
                <div class="col-md-3 col-12 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Social</h6>
                    <div class="footer-widget__content">
                        <div class="site-footer-social">
                            <a title="Facebook" href="<?= HelperFunction::setting('facebook')?>"><i class="fab fa-facebook-f"></i> Facebook</a> |
                            <a title="Instagram" href="<?= HelperFunction::setting('instagram')?>"><i class="fab fa-instagram"></i> Instagram</a> |
                            <a title="youtube" href="<?= HelperFunction::setting('youtube')?>"><i class="fab fa-youtube"></i> Youtube</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-10 d-md-flex">
                    <div class="footer__copyrights">
                        <img width="150px" src="<?= HelperFunction::getLogo('footer') ?>">
                    </div>
                    <div class="address ml-4">
                        <p class="mb-0"><b><?= HelperFunction::setting('site_name', true) ?></b></p>
                        <p class="mb-0"><?= Yii::t('app', 'address') ?>
                            : <?= HelperFunction::setting('address_1', true) ?></p>
                        <p class="mb-0"><?= Yii::t('app', 'email') ?>: <?= HelperFunction::setting('email') ?></p>
                        <p class="mb-0"><?= Yii::t('app', 'phone') ?>: <?= HelperFunction::setting('hotline_1') ?></p>

                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-2 col-lg-2 text-center">
                    <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer>
