<?php

use common\helper\HelperFunction;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;

$menu = HelperFunction::getMenu();
$menuItems = [];
if ($menu) {
    $menuItems = Json::decode(ArrayHelper::getValue($menu, 'items'));
}

?>

<header class="main-header <?= isset(Yii::$app->params['header_style']) ? 'style-three' : '' ?>">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li><a href="mailto:<?= HelperFunction::setting('email') ?>">
                                <span class="icon icofont-envelope"></span>
                                <?= HelperFunction::setting('email') ?></a></li>
                        <li><a href="tel:<?= HelperFunction::setting('hotline_1') ?>">
                                <span class="icon icofont-phone"></span>
                                <?= HelperFunction::setting('hotline_1') ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li class="share">Our Social</li>
                        <li><a href="<?= HelperFunction::setting('twitter')?>" class="icofont-twitter"></a></li>
                        <li><a href="<?= HelperFunction::setting('facebook')?>" class="icofont-facebook"></a></li>
                        <li><a href="<?= HelperFunction::setting('linkedin')?>" class="icofont-linkedin"></a></li>
                        <li><a href="<?= HelperFunction::setting('youtube')?>" class="icofont-play-alt-1"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="/">
                            <img width="175" src="<?= HelperFunction::getLogo('header') ?>"
                                 alt="<?= HelperFunction::setting('site_name') ?>">
                        </a>
                    </div>
                </div>

                <div class="nav-outer pull-left clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <?php if (!empty($menuItems)) { ?>
                                    <?php foreach ($menuItems as $item) {

                                        $children = ArrayHelper::getValue($item, 'children', []);

                                        ?>
                                        <li class="<?= !empty($children) ? 'dropdown' : '' ?>">
                                            <a href="<?= !empty($children) ? '#' : HelperFunction::Link($item['type'], $item) ?>">
                                                <?= $item['title'] ?>
                                            </a>
                                            <?php if (!empty($children)) { ?>
                                                <ul>
                                                    <?php foreach ($children as $submenu) { ?>
                                                        <li>
                                                            <a href="<?= HelperFunction::Link($submenu['type'], $submenu) ?>"
                                                               class="nav__item-link">
                                                                <?= $submenu['title'] ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                        <?php ?>
                                    <?php } ?>
                                <?php } ?>
                                <li class="dropdown">
                                    <a href="javascript:;" class="lang-icon">
                                        <span><img width="24"
                                                   src="/vietau/images/icons/<?= HelperFunction::Language('vi-VN') ? 'vi.svg' : 'en.svg' ?>"/></span>
                                        <span><?= HelperFunction::Language('vi-VN') ? 'VI' : 'EN' ?></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:;" onclick="switchLanguage('<?= LANG_VI ?>')">
                                                <img width="16" src="/vietau/images/icons/vi.svg"/>
                                                <span class="ml-1"></span>VN
                                            </a>
                                            <a href="javascript:void(0)" onclick="switchLanguage('<?= LANG_EN ?>')">
                                                <img width="16" src="/vietau/images/icons/en.svg"/>
                                                <span class="ml-1"></span>EN
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </nav>

                </div>

                <!-- Outer Box -->
                <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box-btn search-box-outer"><span class="icon icofont-search"></span></div>
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="/">
                    <img src="<?= HelperFunction::getLogo('header') ?>" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
