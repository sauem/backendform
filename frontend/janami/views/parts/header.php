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
            <span class="smllogo"><img src="/images/logo-01.png" width="170" height="50" alt="mobile-logo"/></span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        </div>


        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">


                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 346 x 100 pixels) -->
                <div class="desktoplogo"><a href="#hero-8" class="logo-black"><img src="/images/logo-01.png" width="170" height="50" alt="header-logo"></a></div>
                <div class="desktoplogo"><a href="#hero-8" class="logo-white"><img src="/images/logo-white.png" width="170" height="50" alt="header-logo"></a></div>


                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">


                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true"><a href="#">Our Spa <span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="#about-3">Why Spa Magic</a></li>
                                <li aria-haspopup="true"><a href="#services-10">Best Solution</a></li>
                                <li aria-haspopup="true"><a href="#pricing-2">Our Best Deals</a></li>
                                <li aria-haspopup="true"><a href="#reviews-1">Testimonials</a></li>
                                <li aria-haspopup="true"><a href="#gallery-3">Our Gallery</a></li>
                                <li aria-haspopup="true"><a href="#services-5">Treatments</a></li>
                                <li aria-haspopup="true"><a href="#team-1">Our Experts</a></li>
                            </ul>
                        </li>	<!-- END DROPDOWN MENU -->


                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true"><a href="#">Pages <span class="wsarrow"></span></a>
                            <div class="wsmegamenu clearfix halfmenu">
                                <div class="container-fluid">
                                    <div class="row">

                                        <!-- Links -->
                                        <ul class="col-lg-6 link-list">
                                            <li class="fst-li"><a href="about.html">About Us</a></li>
                                            <li><a href="services.html">Our Services</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                            <li><a href="gallery.html">Our Gallery</a></li>
                                            <li><a href="team.html">Our Experts</a></li>
                                            <li><a href="gift-cards.html">Gift Cards</a></li>
                                        </ul>

                                        <!-- Links -->
                                        <ul class="col-lg-6 link-list">
                                            <li class="fst-li"><a href="pricing.html">Pricing Plans</a></li>
                                            <li><a href="booking.html">Booking Form</a></li>
                                            <li><a href="faqs.html">FAQs</a></li>
                                            <li><a href="terms.html">Terms & Privacy</a></li>
                                            <li><a href="contacts.html">Contacts</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </li>	<!-- END DROPDOWN MENU -->


                        <!-- MEGAMENU -->
                        <li aria-haspopup="true"><a href="#">Services <span class="wsarrow"></span></a>
                            <div class="wsmegamenu w-70 clearfix">
                                <div class="container">
                                    <div class="row">

                                        <!-- MEGAMENU LINKS -->
                                        <ul class="col-md-12 col-lg-4 link-list">
                                            <li class="title txt-color-01"><p>Massages</p></li>
                                            <li class="fst-li"><a href="#">Hot Stone Massage</a></li>
                                            <li><a href="#">Traditional Thai Massage</a></li>
                                            <li><a href="#">Aromatherapy Massage</a></li>
                                            <li><a href="#">Deep Tissue Massage</a></li>
                                        </ul>

                                        <!-- MEGAMENU LINKS -->
                                        <ul class="col-md-12 col-lg-4 link-list">
                                            <li class="title txt-color-01"><p>Therapies</p></li>
                                            <li class="fst-li"><a href="#">Physiotherapy</a></li>
                                            <li><a href="#">Skin & Beauty Care</a></li>
                                            <li><a href="#">Executive Reflexology</a></li>
                                            <li><a href="#">Aroma & Jet Hydro Therapy</a></li>
                                        </ul>

                                        <!-- MEGAMENU LINKS -->
                                        <ul class="col-md-12 col-lg-4 link-list">
                                            <li class="title txt-color-01"><p>Treatments</p></li>
                                            <li class="fst-li"><a href="#">Spa Ritual Body Scrub</a></li>
                                            <li><a href="#">Deluxe Korean Scrub</a></li>
                                            <li><a href="#">Soothing Skin Body Wrap</a></li>
                                            <li><a href="#">Teatox Mud Body Treatment</a></li>
                                        </ul>

                                    </div>  <!-- End row -->
                                </div>  <!-- End container -->
                            </div>  <!-- End wsmegamenu -->
                        </li>	<!-- END MEGAMENU -->


                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="gift-cards.html">Gift Cards</a></li>


                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true"><a href="#">Blog <span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                <li aria-haspopup="true"><a href="blog-classic.html">Blog Classic</a></li>
                                <li aria-haspopup="true"><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li aria-haspopup="true"><a href="single-post.html">Single Post</a></li>
                            </ul>
                        </li>	<!-- END DROPDOWN MENU -->


                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="#contacts-2">Contacts</a></li>


                        <!-- HEADER CALL BUTTON -->
                        <li class="nl-simple header-phone" aria-haspopup="true">
                            <a href="tel:123456789"><span class="bg-color-09 white-color"><i class="fas fa-phone"></i></span>+12 9 8765 4321</a>
                        </li>


                        <!-- HEADER BUTTON
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="#" class="btn btn-color-02 tra-02-hover last-link">Book Now</a>
                        </li> -->


                        <!-- HEADER SOCIAL LINKS
                        <li class="nl-simple txt-color-03 header-socials clearfix" aria-haspopup="true">
                            <span><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></span>
                            <span><a href="#" class="ico-dribbble"><i class="fab fa-yelp"></i></a></span>
                        </li> -->


                    </ul>
                </nav>	<!-- END MAIN MENU -->

            </div>
        </div>	<!-- END NAVIGATION MENU -->


    </div>     <!-- End header-wrapper -->
</header>
