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
<header id="header" class="header white-menu navbar-dark">
    <div class="header-wrapper">


        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo">
                <img src="<?= HelperFunction::getLogo('header')?>" width="170" height="50" alt="<?= HelperFunction::setting('site_name')?>"/>
            </span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        </div>


        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">


                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 346 x 100 pixels) -->
                <div class="desktoplogo"><a href="/" class="logo-black">
                        <img src="<?= HelperFunction::getLogo('header')?>" width="170" height="50" alt="<?= HelperFunction::setting('site_name')?>">
                    </a>
                </div>
                <div class="desktoplogo"><a href="/" class="logo-white">
                        <img src="<?= HelperFunction::getLogo('header')?>" width="170" height="50" alt="<?= HelperFunction::setting('site_name')?>">
                    </a>
                </div>
                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">

                        <li class="nl-simple" aria-haspopup="true"><a href="/">Trang chủ</a></li>


                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true"><a href="#">Sản phẩm <span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true">
                                    <a href="/<?= SHOP ?>">Dòng bảo vệ <span class="wsarrow"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="/<?= SHOP ?>">Bella the sun</a></li>
                                        <li aria-haspopup="true"><a href="/<?= SHOP ?>">Bihaku</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="/<?= SHOP ?>">Dòng phục hổi <span
                                                class="wsarrow"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="/<?= SHOP ?>">Ketoskin</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="/<?= SHOP ?>">Dòng chữa trị <span
                                                class="wsarrow"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="/<?= SHOP ?>">Skinicer</a></li>
                                        <li aria-haspopup="true"><a href="/<?= SHOP ?>">Spirularin</a></li>
                                        <li aria-haspopup="true"><a href="/<?= SHOP ?>">Skinmd</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="/<?= SHOP ?>">Dòng làm đẹp <span
                                                class="wsarrow"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="/<?= SHOP ?>">Bella Fora</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>    <!-- END DROPDOWN MENU -->


                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="/<?= FAQS ?>">Bạn có thắc mắc?</a></li>
                        <li class="nl-simple" aria-haspopup="true"><a href="/<?= ARTICLES ?>">Tips giải cứu làn da</a>
                        </li>
                        <li class="nl-simple" aria-haspopup="true"><a href="/<?= CONTACT ?>">Liên hệ</a></li>
                        <!-- HEADER CALL BUTTON -->
                        <li class="nl-simple header-phone" aria-haspopup="true">
                            <a href="tel:123456789"><span class="bg-color-09 white-color"><i
                                            class="fas fa-phone"></i></span>+12 9 8765 4321</a>
                        </li>


                        <!-- HEADER BUTTON
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="#" class="btn btn-color-02 tra-02-hover last-link">Book Now</a>
                        </li> -->


                        <li class="nl-simple cart txt-color-03 header-socials clearfix" aria-haspopup="true">
                            <span>
                                <a href="/<?= CART ?>" class="ico-cart"><i class="fas fa-shopping-bag"></i>
                                <span id="cart-mini">0</span>
                                </a>
                            </span>
                        </li>


                    </ul>
                </nav>    <!-- END MAIN MENU -->

            </div>
        </div>    <!-- END NAVIGATION MENU -->


    </div>     <!-- End header-wrapper -->
</header>
