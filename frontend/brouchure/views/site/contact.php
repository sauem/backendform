<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use common\helper\HelperFunction;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
$this->params['header_type'] = 'light';
?>
<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Contact Us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="ti ti-home margin_right1"></i>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map Section -->
<!--- conatact-section -->
<section class="ttm-row conatact-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title without-seperator title-style-center_text">
                    <div class="title-header">
                        <h3>what we offer</h3>
                        <h2 class="title">Learning Analytics Solutions</h2>
                    </div>
                    <div class="title-desc">
                        <p>We are specialists in economics and information technologies and we apply full range of talent to creating perfect solution for each client’s needs.</p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="padding_right30 res-991-padding_right0 res-991-margin_bottom30">
                    <div class="ttm_single_image-wrapper margin_bottom40">
                        <img class="img-fluid w-100" src="images/single-img-12.jpg" alt="single-12">
                    </div>
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-before-content style11">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-round">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Call Anytime</h3>
                            </div>
                            <div class="featured-desc">+1800 200 12345</div>
                        </div>
                    </div><!-- featured-icon-box end-->
                    <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom20"></div>
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-before-content style11">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-round">
                                <i class="fa fa-globe"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Send Email</h3>
                            </div>
                            <div class="featured-desc">needhelp@company.com</div>
                        </div>
                    </div><!-- featured-icon-box end-->
                    <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom20"></div>
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-before-content style11 margin_bottom0">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-round">
                                <i class="ti ti-home"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Visit Office</h3>
                            </div>
                            <div class="featured-desc">85 Sroklyn Random Street USA</div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey z-index-2 p-50 res-991-margin_top30 res-991-p-15">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content">
                        <form id="contact_form" class="contact_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                            <div class="row ttm-boxes-spacing-15px">
                                <div class="col-md-12 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-md-6 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><input name="address" type="text" value="" placeholder="Your Email" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-md-6 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><input name="phone" type="text" value="" placeholder="Subject" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><textarea name="message" rows="3" placeholder="Message" required="required"></textarea></span>
                                    </label>
                                </div>
                            </div>
                            <button class="submit ttm-btn ttm-btn-size-lg ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor w-100" type="submit">SEND A MESSAGE!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- conatact-section end -->


<!--google_map-->
<div id="google_map" class="google_map">
    <div class="map_container clearfix">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5641.023256486439!2d36.82118701313386!3d-1.290840763744417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sin!4v1612875554198!5m2!1sen!2sin" width="100%" height="100%" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm_contact_widget_wrapper clearfix">
                        <h3>Opening Hours</h3>
                        <ul>
                            <li><h6>Monday</h6>12:00pm – 19:00 pm</li>
                            <li><h6>Tuesday To Friday</h6>12:00pm – 19:00 pm</li>
                            <li><h6>Saturday</h6>12:00pm – 19:00 pm</li>
                        </ul>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor margin_top10" href="contact-us.html">Make A Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
