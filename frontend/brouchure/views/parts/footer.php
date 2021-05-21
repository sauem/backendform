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

<footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
    <div class="first-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 widget-area">
                    <div class="widget newsletter_widget clearfix">
                        <h3>Subscribe To Our Newsletter</h3>
                        <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                            <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                <p>
                                    <i class="fa fa-paper-plane-o"></i>
                                    <input type="email" name="email" placeholder="Enter Your Email Address..." required="">
                                </p>
                                <p><button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Subscribe Now!</button></p>
                            </div>
                            <div id="subscribe-msg"></div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 widget-area">
                    <div class="widget offer_widget clearfix">
                        <div class="d-md-flex justify-content-between align-items-end">
                            <div class="padding_right50 position-relative">
                                <h2>20%</h2>
                                <h3>off!</h3>
                                <h4>Lead Consulting Agency Global Reputation</h4>
                            </div>
                            <div>
                                <a href="#" class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-shape-rounded ttm-btn-color-white">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text clearfix">
                        <h3 class="widget-title">About Us</h3>
                        <div class="textwidget widget-text">
                            <p>Axacus Consultancy is a one-stop shop offering accounting, financial and advisory services. Beneficial experienced finance professionals.</p>
                            <div class="call_detail">
                                <h3>Emergency 24/7</h3>
                                <p>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul id="menu-footer-quick-links" class="menu">
                            <li><a href="#">Make Appointment</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Department</a></li>
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">Our Case Studies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget-recent-post clearfix">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul class="widget-post ttm-recent-post-list">
                            <li>
                                <a href="blog-single.html"><img class="img-fluid" src="images/blog/b_thumbb-01.jpg" alt="post-img"></a>
                                <div class="post-detail">
                                    <a href="blog-single.html">5 Effective Ways to Hire More Workers</a>
                                    <span class="post-date">Nov 5, 2020</span>
                                </div>
                            </li>
                            <li>
                                <a href="blog-single.html"><img class="img-fluid" src="images/blog/b_thumbb-02.jpg" alt="post-img"></a>
                                <div class="post-detail">
                                    <a href="blog-single.html">Does My Business Need a Director of Training?</a>
                                    <span class="post-date">Nov 5, 2020</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget-latest-tweets clearfix">
                        <h3 class="widget-title">Latest Tweets</h3>
                        <div class="latest-tweets">
                            <div class="slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 1}} , {"breakpoint":900,"settings":{"slidesToShow": 1}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                                <div tabindex="-1" aria-hidden="true">
                                    <p class="tweet-text"><a class="twitter-hashtag" href="https://twitter.com/search?q=%23trending&amp;src=hash" target="_blank" rel="noopener" tabindex="-1">#trending</a> theme WooCommerece! Get a huge amount of customers for selling any kind of auto parts, auto equipment acc… <a href="https://twitter.com/i/web/status/1360205340386578441" target="_blank" rel="noopener" tabindex="-1">twitter.com/i/web/status/13602…</a></p>
                                    <p class="tweet-details"><a rel="noopener" href="http://twitter.com/ThemetechmountD/status/1360205340386578441" target="_blank" tabindex="-1"><time datetime="2021-02-12 12:33:19+0000">February 12, 2021 12:33 pm</time></a></p>
                                </div>
                                <div tabindex="-1" aria-hidden="true">
                                    <p class="tweet-text"><a class="twitter-hashtag" href="https://twitter.com/search?q=%23trending&amp;src=hash" target="_blank" rel="noopener" tabindex="0">#trending</a> WooCommerce Theme Build an <a class="twitter-hashtag" href="https://twitter.com/search?q=%23exquisite&amp;src=hash" target="_blank" rel="noopener" tabindex="0">#exquisite</a> website and attract a huge number of customers for an online… <a href="https://twitter.com/i/web/status/1360204984596353030" target="_blank" rel="noopener" tabindex="0">twitter.com/i/web/status/13602…</a></p>
                                    <p class="tweet-details"><a rel="noopener" href="http://twitter.com/ThemetechmountD/status/1360204984596353030" target="_blank" tabindex="-1"><time datetime="2021-02-12 12:31:54+0000">February 12, 2021 12:31 pm</time></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text copyright ttm-textcolor-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-lg-flex align-items-center justify-content-between text-center">
                        <div class="order-1">
                            <div class="cpy-text">Copyright © 2021 <a href="#">Axacus</a>. All rights reserved.</div>
                        </div>
                        <div class="order-2 footer-logo">
                            <img class="img-fluid" src="images/footer-logo.svg" alt="logo">
                        </div>
                        <div class="order-3">
                            <div class="social-icons">
                                <ul class="social-icons list-inline">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin" data-tooltip="Linkedin"><i class="ti ti-linkedin"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google" data-tooltip="Google"><i class="ti ti-google"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter" data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
