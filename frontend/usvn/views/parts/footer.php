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
                <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
                    <div class="footer-widget__content">
                        <img width="150" src="<?= HelperFunction::getLogo('footer') ?>" alt="logo" class="mb-30">
                    </div><!-- /.footer-widget__content -->
                    <p><?= HelperFunction::setting('site_description', true) ?></p>
                </div>
                <?php if (!empty($menuItems)) {
                    foreach ($menuItems as $item) {
                        $childrens = ArrayHelper::getValue($item, 'children', []);
                        ?>
                        <div class="col-sm-6 col-md-2 footer-widget footer-widget-nav">
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
                <div class="col-sm-6 col-md-6 col-lg-3 footer-widget">
                    <h6 class="footer-widget__title">Facebook Fanpage</h6>
                    <div class="footer-widget__content">
                        <?= HelperFunction::setting('fanpage_script')?>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="footer__copyrights">
                        <span class="fz-14">&copy; <?= Yii::t('app', 'company_name') ?></span>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-2 col-lg-2 text-center">
                    <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
                    <ul class="social-icons list-unstyled mb-0 mr-30">
                        <li><a href="<?= HelperFunction::setting('facebook')?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?= HelperFunction::setting('instagram')?>"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?= HelperFunction::setting('twitter')?>"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer>
