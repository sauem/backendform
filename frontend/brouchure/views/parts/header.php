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
<header id="masthead" class="header ttm-header-style-01">
    <!-- topbar -->
    <div class="top_bar ttm-bgcolor-darkgrey clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-12 d-flex flex-row align-items-center">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="ti ti-email"></i></div>
                        <a href="mailto:<?= HelperFunction::setting('email') ?>">
                            <?= HelperFunction::setting('email') ?>
                        </a>
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="ti ti-location-pin"></i></div>
                        <?= HelperFunction::setting('address_1', true) ?>
                    </div>
                    <div class="top_bar_contact_item top_bar_social ml-auto p-0">
                        <ul class="social-icons d-flex">
                            <li><a href="<?= HelperFunction::setting('facebook') ?>" rel="noopener"
                                   aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?= HelperFunction::setting('twitter') ?>" rel="noopener" aria-label="twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                            <li><a href="<?= HelperFunction::setting('linkedin') ?>" rel="noopener"
                                   aria-label="linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="top_bar_contact_item d-flex align-items-center">
                        <div class="header_search">
                            <a href="#" class="btn-default search_btn"><i class="fa fa-search"></i></a>
                            <div class="header_search_content">
                                <div class="header_search_content_inner">
                                    <a href="#" class="close_btn"><i class="ti ti-close"></i></a>
                                    <form id="searchbox" method="get" action="#">
                                        <input class="search_query" type="text" id="search_query_top" name="s"
                                               placeholder="<?= Yii::t('app', 'search') ?>.." value="">
                                        <button type="submit" class="btn close-search"><i class="ti ti-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span ttm-bgcolor-skincolor ttm-textcolor-white mr-auto margin_left50 padding_left15">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <div class="header_btn">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline"
                                       href="/<?= CONTACT ?>"><?= Yii::t('app', 'advisory') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end -->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                            <!-- site-branding -->
                            <div class="site-branding ">
                                <a class="home-link" href="/" title="<?= HelperFunction::setting('site_name', true) ?>"
                                   rel="home">
                                    <img id="logo-img" width="120" class="img-fluid auto_size"
                                         src="/images/mk.png"
                                         alt="<?= HelperFunction::setting('site_name', true) ?>">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="d-flex flex-row">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <ul class="menu">
                                        <?php if (!empty($menuItems)) {
                                            foreach ($menuItems as $menuItem) {
                                                $children = ArrayHelper::getValue($menuItem, 'children', []);
                                                ?>
                                                <li class="mega-menu-item">
                                                    <a href="<?= HelperFunction::Link($menuItem['type'], $menuItem)?>"><?= $menuItem['title'] ?></a>
                                                </li>
                                                <?php
                                            }
                                        } ?>
                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">
                                                <img width="24" src="/images/<?= HelperFunction::getLanguage() == 'en' ? 'en' : 'vi'?>.svg"/>
                                                <?= HelperFunction::getLanguage() === 'en' ? 'EN' : 'VI'?>
                                            </a>
                                            <ul class="mega-submenu">
                                                <li>
                                                    <a href="javascript:;" onclick="switchLanguage('en')" class="mega-menu-link">
                                                        <img width="24" src="/images/en.svg"/> EN
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" onclick="switchLanguage('vi')" class="mega-menu-link">
                                                        <img width="24" src="/images/vi.svg"/> VI
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav><!-- menu end -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon ttm-textcolor-skincolor"><i
                                                class="themifyicon ti-comments"></i></div>
                                    <div class="widget_content">
                                        <h3 class="widget_title"><?= Yii::t('app','hotline')?></h3>
                                        <p class="widget_desc"><?= HelperFunction::setting('hotline_1')?></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header>
