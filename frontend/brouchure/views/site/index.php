<?php

/* @var $this yii\web\View */

use common\helper\HelperFunction;
use yii\widgets\ActiveForm;

$this->title = HelperFunction::getLanguage() == 'vi' ?
    HelperFunction::setting('site_name') :
    HelperFunction::setting('site_name_en');
Yii::$app->params['footer_type'] = 'light';
?>

<!-- Services Section -->
<?= $this->render('../parts/slider', [
    'sliders' => $sliders
]) ?>

<!--services-section-->
<section class="ttm-row services-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title without-seperator title-style-center_text">
                    <div class="title-header">
                        <h2 class="title">Our Services & Commitments</h2>
                    </div>
                    <div class="title-desc">
                        <p>We are specialists in both economics and information technologies and we apply our full range
                            of talent to creating the perfect solution for each client’s needs.</p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->
        <!-- row -->
        <div class="row row-equal-height">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!--featured-icon-box-->
                <div class="featured-icon-box icon-align-top-content style1">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                            <i class="flaticon flaticon-management"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3>Understanding</h3>
                        </div>
                        <div class="featured-desc">
                            <p>Deep understanding of manufacturing industry
                                and relating government regulations</p>
                        </div>
                    </div>
                </div><!-- featured-icon-box end-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!--featured-icon-box-->
                <div class="featured-icon-box icon-align-top-content style1">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                            <i class="flaticon flaticon-idea-2"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3>Faster</h3>
                        </div>
                        <div class="featured-desc">
                            <p>Intensive network within the local market</p>
                        </div>
                    </div>
                </div><!-- featured-icon-box end-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!--featured-icon-box-->
                <div class="featured-icon-box icon-align-top-content style1">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                            <i class="flaticon flaticon-document"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3>Value</h3>
                        </div>
                        <div class="featured-desc">
                            <p>Promising value to customer</p>
                        </div>
                    </div>
                </div><!-- featured-icon-box end-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!--featured-icon-box-->
                <div class="featured-icon-box icon-align-top-content style1">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                            <i class="flaticon flaticon-corporate-1"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3>Support</h3>
                        </div>
                        <div class="featured-desc">
                            <p>Expert team help your company ex more solution</p>
                        </div>
                    </div>
                </div><!-- featured-icon-box end-->
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--services-section-->


<!--padding_bottom_zero-section-->
<section class="ttm-row padding_bottom_zero-section bg-layer bg-layer-equal-height mt_20 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-12">
                        <!-- col-img-img-one -->
                        <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-left-span z-index-2">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                            </div>
                        </div><!-- col-img-bg-img-one end-->
                        <img class="img-fluid ttm-equal-height-image w-100" src="images/bg-image/col-bgimage-1.jpg"
                             alt="bg-image">
                    </div>
                    <div class="col-lg-8">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-darkgrey ttm-bg ttm-col-bgimage-yes col-bg-img-three ttm-right-span spacing-1 h-auto">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h2 class="title">How we can help</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>
                                            We are a Hanoi-based consulting firm specializing in
                                            Manufacturing Industry in Vietnam. We offer various
                                            advisory and professional services for manufacturers
                                            such as investment advisory, supporting industry
                                            incentives, tax services and best practices you need to
                                            achieve immediate value today as you build toward
                                            your long-term vision.<br>
                                            With a broad network in the market and deep
                                            experiences of Vietnam law and regulation system,
                                            we offer comprehensive services to support
                                            businesses investing in Vietnam from the investment
                                            idea to the post-investment activities. Our featured
                                            service is to assist companies in applying for CIT
                                            exemption/reduction through preferential policies of
                                            Vietnam Government such as Supporting Industry
                                            Incentives, High-Tech incentives, Investment
                                            incentives and so on. We have helped many
                                            companies successfully achieving these incentives.<br>
                                            Make an appointment with our consultants to find out
                                            more.
                                        </p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="padding_top15 padding_bottom30 res-991-padding_bottom30">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box icon-align-before-content style2 icon-ver_align-top">
                                        <h3>Why chosse us?</h3>
                                        <div class="featured-icon">
                                            <p><i class="ti ti-angle-right margin_left0"></i>
                                                Deep understanding of manufacturing industry
                                                and relating government regulations</p>
                                            <p><i class="ti ti-angle-right margin_left0"></i>
                                                Intensive network within the local market</p>
                                            <p><i class="ti ti-angle-right margin_left0"></i>
                                                Promising value to customer</p>
                                            <p><i class="ti ti-angle-right margin_left0"></i>
                                                Expert team</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
    </div>
</section>
<!--padding_bottom_zero-section-->


<!--tab-section-->
<section class="ttm-row tab-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title style2">
                    <div class="title-header">
                        <h2 class="title">Incentive policies on the supporting industry</h2>
                    </div>
                    <div class="title-desc">
                        <p>(*) Besides the general incentives prescribed above, projects in
                            manufacturing supporting products on the List located in
                            disadvantageous or extremely disadvantageous areas shall
                            benefit from region-based investment incentives</p>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ttm-tabs ttm-tab-style-01" data-effect="fadeIn">
                    <ul class="tabs text-center clearfix">
                        <li class="tab"><a href="#"><i class="flaticon flaticon-money"></i>Hi-Tech</a></li>
                        <li class="tab"><a href="#"><i class="flaticon flaticon-document"></i>Footwear</a></li>
                        <li class="tab active"><a href="#"><i class="flaticon flaticon-charts"></i>Electronics</a>
                        </li>
                        <li class="tab"><a href="#"><i class="flaticon flaticon-corporate"></i>Automobile</a></li>
                        <li class="tab"><a href="#"><i class="flaticon flaticon-money"></i>Mechanical</a></li>
                        <li class="tab"><a href="#"><i class="flaticon flaticon-website"></i>Textile</a></li>
                    </ul>
                    <div class="content-tab">
                        <!-- content-inner -->
                        <div class="content-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="res-991-padding_bottom30 padding_right10 res-991-padding_right0">
                                        <h3>Corporate Income Tax</h3>
                                        <p>10% Corporate Income Tax in 15 years</p>
                                        <p>04 years Tax-free, the next 09 years paying 50% tax
                                            amount</p>
                                        <p><img class="img-fluid alignleft" src="images/single-img-09.jpg" alt="image"
                                                width="150" height="100">Sometimes you get into it for the wrong
                                            reasons, &amp;amp; eventually it hits you on the face. These reasons can be
                                            drawbak but an eye opener too.</p>
                                        <div class="padding_top10">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Running out of money can be a good sign</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Clients are always right, except when they are wrong</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">You’re worth every penny, so show it</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="d-inline-block single-img-wraper p-15 ttm-bgcolor-grey border-rad_6">
                                        <img class="img-fluid auto_size" height="375" width="500"
                                             src="images/tab-img01.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div><!-- content-inner end-->
                        <!-- content-inner -->
                        <div class="content-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10">
                                    <div class="d-inline-block single-img-wraper p-15 ttm-bgcolor-grey border-rad_6">
                                        <img class="img-fluid auto_size" height="375" width="500"
                                             src="images/tab-img01.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="res-991-padding_top30 padding_left10 res-991-padding_left0">
                                        <h3>Import Duties</h3>
                                        <p>To obtain higher performance, our leaders first identify the critical
                                            obstacles to forward to overcome loss. We define our company's mission &
                                            Prioritize company objetives</p>
                                        <p><img class="img-fluid alignleft" src="images/single-img-09.jpg" alt="image"
                                                width="150" height="100">Sometimes you get into it for the wrong
                                            reasons, &amp;amp; eventually it hits you on the face. These reasons can be
                                            drawbak but an eye opener too.</p>
                                        <div class="padding_top10">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Running out of money can be a good sign</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Clients are always right, except when they are wrong</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">You’re worth every penny, so show it</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- content-inner end-->
                        <!-- content-inner -->
                        <div class="content-inner active">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="res-991-padding_bottom30 padding_right10 res-991-padding_right0">
                                        <h3>Credivvt</h3>
                                        <p>To obtain higher performance, our leaders first identify the critical
                                            obstacles to forward to overcome loss. We define our company's mission &
                                            Prioritize company objetives</p>
                                        <p><img class="img-fluid alignleft" src="images/single-img-09.jpg" alt="image"
                                                width="150" height="100">Sometimes you get into it for the wrong
                                            reasons, &amp;amp; eventually it hits you on the face. These reasons can be
                                            drawbak but an eye opener too.</p>
                                        <div class="padding_top10">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Running out of money can be a good sign</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Clients are always right, except when they are wrong</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">You’re worth every penny, so show it</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="d-inline-block single-img-wraper p-15 ttm-bgcolor-grey border-rad_6">
                                        <img class="img-fluid auto_size" height="375" width="500"
                                             src="images/tab-img01.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div><!-- content-inner end-->
                        <!-- content-inner -->
                        <div class="content-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10">
                                    <div class="d-inline-block single-img-wraper p-15 ttm-bgcolor-grey border-rad_6">
                                        <img class="img-fluid auto_size" height="375" width="500"
                                             src="images/tab-img01.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="res-991-padding_top30 padding_left10 res-991-padding_left0">
                                        <h3>Value-addved Tax</h3>
                                        <p>To obtain higher performance, our leaders first identify the critical
                                            obstacles to forward to overcome loss. We define our company's mission &
                                            Prioritize company objetives</p>
                                        <p><img class="img-fluid alignleft" src="images/single-img-09.jpg" alt="image"
                                                width="150" height="100">Sometimes you get into it for the wrong
                                            reasons, &amp;amp; eventually it hits you on the face. These reasons can be
                                            drawbak but an eye opener too.</p>
                                        <div class="padding_top10">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Running out of money can be a good sign</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Clients are always right, except when they are wrong</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">You’re worth every penny, so show it</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- content-inner end-->
                        <!-- content-inner -->
                        <div class="content-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="res-991-padding_bottom30 padding_right10 res-991-padding_right0">
                                        <h3>Environmental protection</h3>
                                        <p>To obtain higher performance, our leaders first identify the critical
                                            obstacles to forward to overcome loss. We define our company's mission &
                                            Prioritize company objetives</p>
                                        <p><img class="img-fluid alignleft" src="images/single-img-09.jpg" alt="image"
                                                width="150" height="100">Sometimes you get into it for the wrong
                                            reasons, &amp;amp; eventually it hits you on the face. These reasons can be
                                            drawbak but an eye opener too.</p>
                                        <div class="padding_top10">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Running out of money can be a good sign</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Clients are always right, except when they are wrong</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">You’re worth every penny, so show it</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="d-inline-block single-img-wraper p-15 ttm-bgcolor-grey border-rad_6">
                                        <img class="img-fluid auto_size" height="375" width="500"
                                             src="images/tab-img01.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div><!-- content-inner end-->
                        <!-- content-inner -->
                        <div class="content-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10">
                                    <div class="d-inline-block single-img-wraper p-15 ttm-bgcolor-grey border-rad_6">
                                        <img class="img-fluid auto_size" height="375" width="500"
                                             src="images/tab-img01.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="res-991-padding_top30 padding_left10 res-991-padding_left0">
                                        <h3>Investment credit</h3>
                                        <p>To obtain higher performance, our leaders first identify the critical
                                            obstacles to forward to overcome loss. We define our company's mission &
                                            Prioritize company objetives</p>
                                        <p><img class="img-fluid alignleft" src="images/single-img-09.jpg" alt="image"
                                                width="150" height="100">Sometimes you get into it for the wrong
                                            reasons, &amp;amp; eventually it hits you on the face. These reasons can be
                                            drawbak but an eye opener too.</p>
                                        <div class="padding_top10">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Running out of money can be a good sign</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">Clients are always right, except when they are wrong</span>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                            class="ttm-list-li-content">You’re worth every penny, so show it</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- content-inner end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--tab-section end-->


<!--testimonial-section-->
<section class="ttm-row testimonial-section bg-img1 ttm-bgcolor-grey ttm-bg ttm-bgimage-yes clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>TESTIMONIALS</h3>
                        <h2 class="title">What Our Clients Say?</h2>
                    </div>
                    <div class="title-desc">
                        <p>We are specialists in both economics and information technologies and we apply our full range
                            of talent to creating the perfect solution for each client’s needs.</p>
                    </div>
                </div><!-- section-title end -->
            </div>
        </div><!-- row end -->
        <div class="row slick_slider"
             data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
            <div class="col-lg-6">
                <!-- testimonials -->
                <div class="testimonials ttm-testimonial-box-view-style1">
                    <div class="testimonial-content">
                        <div class="testimonial-content-inner">
                            <div class="d-flex align-items-center">
                                <div class="testimonial-avatar">
                                    <!-- testimonials-img -->
                                    <div class="testimonial-img">
                                        <img class="img-center" src="images/testimonial/01.jpg" alt="testimonial-img">
                                    </div><!-- testimonials-img end-->
                                </div>
                                <!-- testimonials-caption -->
                                <div class="testimonial-caption">
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                    <h3>Raymon Myers</h3>
                                    <label>CEO At Laboratory</label>
                                </div>
                            </div><!-- testimonials-caption end -->
                        </div>
                        <blockquote>Analysts have done an excellent job presenting the analysis and insights. I am
                            confident in saying that they have helped move business!
                        </blockquote>
                    </div>
                </div>
                <!-- testimonials END -->
            </div>
            <div class="col-lg-6">
                <!-- testimonials -->
                <div class="testimonials ttm-testimonial-box-view-style1">
                    <div class="testimonial-content">
                        <div class="testimonial-content-inner">
                            <div class="d-flex align-items-center">
                                <div class="testimonial-avatar">
                                    <!-- testimonials-img -->
                                    <div class="testimonial-img">
                                        <img class="img-center" src="images/testimonial/02.jpg" alt="testimonial-img">
                                    </div><!-- testimonials-img end-->
                                </div>
                                <!-- testimonials-caption -->
                                <div class="testimonial-caption">
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                    <h3>Rayan Methew</h3>
                                    <label>Business man</label>
                                </div>
                            </div><!-- testimonials-caption end-->
                        </div>
                        <blockquote>I would like to thank you for your excellent efforts and commitment in assisting us
                            to obtain 510(k) clearance. I am impressed
                        </blockquote>
                    </div>
                </div>
                <!-- testimonials END -->
            </div>
            <div class="col-lg-6">
                <!-- testimonials -->
                <div class="testimonials ttm-testimonial-box-view-style1">
                    <!-- testimonials-content -->
                    <div class="testimonial-content">
                        <div class="testimonial-content-inner">
                            <div class="d-flex align-items-center">
                                <div class="testimonial-avatar">
                                    <!-- testimonials-img -->
                                    <div class="testimonial-img">
                                        <img class="img-center" src="images/testimonial/03.jpg" alt="testimonial-img">
                                    </div><!-- testimonials-img end-->
                                </div>
                                <!-- testimonials-caption -->
                                <div class="testimonial-caption">
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                    <h3>khon Martin</h3>
                                    <label>Los Angeles</label>
                                </div>
                            </div><!-- testimonials-caption end-->
                        </div>
                        <blockquote>The Axacus team are ultimate rock stars! They are a highly educated,&amp;
                            experienced team that is dedicated to helping..
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial-section end-->


<!--cta-section-->
<section class="ttm-row cta-section ttm-textcolor-white bg-img2 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row align-items-md-center justify-content-between">
            <div class="col-lg-10 col-md-12 mr-auto">
                <!-- section-title -->
                <div class="section-title">
                    <div class="title-header">
                        <h3 class="font-weight-normal">More Than 50,000 Happy Client</h3>
                        <h2 class="title">We Provide Best Digital Marketing Solutions Enjoy Full-Service Digital
                            Expertise</h2>
                    </div>
                </div><!-- section-title end -->
                <div class="d-inline-block">
                    <a href="https://youtu.be/dk9uNWPP7EA" target="_self"
                       class="ttm_prettyphoto ttm-btn-color-white  ttm-btn btn-inline ttm-btn-size-md">
                                    <span class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-textcolor-white ttm-icon_element-size-xs ttm-icon_element-style-rounded margin_right10 margin_bottom0">
                                        <i class="ti ti-control-play margin_left0 padding_left1"></i>
                                    </span>
                    </a><span class="font-weight-bold"> WATCH VIDEO</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--cta-section end-->


<!-- tab-section -->
<section class="ttm-row tab-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h2 class="title">Learning Analytics Solutions</h2>
                    </div>
                    <div class="title-desc">
                        <p>List of incentive receiving
                            industries</p>
                    </div>
                </div><!-- section-title end -->
            </div>
            <div class="col-lg-12">
                <div class="row ttm-tabs ttm-tab-style-02" data-effect="fadeIn">
                    <div class="col-xl-8 col-lg-7 content-tab padding_right45">
                        <!-- content-inner -->
                        <div class="content-inner active">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1 border-rad_6 ttm-textcolor-white">
                                <div class="featured-thumbnail">
                                    <img src="images/services/services-01.jpg" height="480" width="750" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <span>25 Jobs in 10 Differents Companies</span>
                                        <h3>Business Case for Sustainability</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We are specialists in both economics and information techno gies and we apply
                                            our full range of talent.</p>
                                    </div>
                                    <a href="strategy-planning.html" class="ttm-btn btn-inline ttm-btn-size-md">
                                                    <span class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-rounded margin_bottom0">
                                                        <i class="ti ti-angle-right margin_left0"></i>
                                                    </span>
                                    </a>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <!-- content-inner -->
                        <div class="content-inner">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1 border-rad_6 ttm-textcolor-white">
                                <div class="featured-thumbnail">
                                    <img src="images/services/services-02.jpg" height="480" width="750" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <span>25 Jobs in 10 Differents Companies</span>
                                        <h3>Our Transformation Policy</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We are specialists in both economics and information techno gies and we apply
                                            our full range of talent.</p>
                                    </div>
                                    <a href="strategy-planning.html" class="ttm-btn btn-inline ttm-btn-size-md">
                                                    <span class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-rounded margin_bottom0">
                                                        <i class="ti ti-angle-right margin_left0"></i>
                                                    </span>
                                    </a>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <!-- content-inner -->
                        <div class="content-inner">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1 border-rad_6 ttm-textcolor-white">
                                <div class="featured-thumbnail">
                                    <img src="images/services/services-01.jpg" height="480" width="750" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <span>25 Jobs in 10 Differents Companies</span>
                                        <h3>Our Customer Strategy</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We are specialists in both economics and information techno gies and we apply
                                            our full range of talent.</p>
                                    </div>
                                    <a href="strategy-planning.html" class="ttm-btn btn-inline ttm-btn-size-md">
                                                    <span class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-rounded margin_bottom0">
                                                        <i class="ti ti-angle-right margin_left0"></i>
                                                    </span>
                                    </a>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <!-- content-inner -->
                        <div class="content-inner">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1 border-rad_6 ttm-textcolor-white">
                                <div class="featured-thumbnail">
                                    <img src="images/services/services-02.jpg" height="480" width="750" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <span>25 Jobs in 10 Differents Companies</span>
                                        <h3>Brand Management Career</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We are specialists in both economics and information techno gies and we apply
                                            our full range of talent.</p>
                                    </div>
                                    <a href="strategy-planning.html" class="ttm-btn btn-inline ttm-btn-size-md">
                                                    <span class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-rounded margin_bottom0">
                                                        <i class="ti ti-angle-right margin_left0"></i>
                                                    </span>
                                    </a>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <!-- content-inner -->
                        <div class="content-inner">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1 border-rad_6 ttm-textcolor-white">
                                <div class="featured-thumbnail">
                                    <img src="images/services/services-01.jpg" height="480" width="750" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <span>25 Jobs in 10 Differents Companies</span>
                                        <h3>Our Advanced Analytics Graph</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We are specialists in both economics and information techno gies and we apply
                                            our full range of talent.</p>
                                    </div>
                                    <a href="strategy-planning.html" class="ttm-btn btn-inline ttm-btn-size-md">
                                                    <span class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-rounded margin_bottom0">
                                                        <i class="ti ti-angle-right margin_left0"></i>
                                                    </span>
                                    </a>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <!-- content-inner -->
                        <div class="content-inner">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1 border-rad_6 ttm-textcolor-white">
                                <div class="featured-thumbnail">
                                    <img src="images/services/services-01.jpg" height="480" width="750" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <span>25 Jobs in 10 Differents Companies</span>
                                        <h3>Growth Strategies in Business</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We are specialists in both economics and information techno gies and we apply
                                            our full range of talent.</p>
                                    </div>
                                    <a href="strategy-planning.html" class="ttm-btn btn-inline ttm-btn-size-md">
                                                    <span class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-rounded margin_bottom0">
                                                        <i class="ti ti-angle-right margin_left0"></i>
                                                    </span>
                                    </a>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                    </div>
                    <ul class="col-xl-4 col-lg-5 res-991-padding_left15 padding_right15 tabs clearfix">
                        <li class="tab active">
                            <a href="#">
                                <i class="flaticon flaticon-idea-1"></i>
                                <h3>Textile & Garment</h3>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="#">
                                <i class="flaticon flaticon-salary"></i>
                                <h3>Footwear -
                                    Leather</h3>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="#">
                                <i class="flaticon flaticon-employee"></i>
                                <h3>Electronics</h3>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="#">
                                <i class="flaticon flaticon-money"></i>
                                <h3>Automobile</h3>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="#">
                                <i class="flaticon flaticon-presentation"></i>
                                <h3>Mechanical</h3>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="#">
                                <i class="flaticon flaticon-briefcase"></i>
                                <h3>Supporting
                                    products used
                                    in Hi-tech
                                    industry</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tab-section end -->


<!--blog-section-->
<section class="ttm-row blog-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title style2">
                    <div class="title-header">
                        <h3>Latest News</h3>
                        <h2 class="title">Our News And Insights</h2>
                    </div>
                    <div class="title-desc">
                        <p>Our results solution combines implementation support, capability building and
                            state-of-the-art diagnostic and analytic tools sally change.</p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <div class="row slick_slider"
             data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/blog/blog-01-1200x800.jpg" alt="">
                    </div>
                    <div class="featured-content">
                        <div class="post-header">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                            <span class="ttm-entry-date">
                                                <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span
                                                            class="entry-month entry-year">APR</span></time>
                                            </span>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                            <span class="ttm-meta-line comments-link"><i class="fa fa-comments"></i>Comments
                                            </span>
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                            </div><!-- post-meta end -->
                        </div>
                        <div class="post-title featured-title">
                            <h3><a href="blog-single.html">5 Effective Ways to Hire More Workers</a></h3>
                        </div>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-color-darkgrey btn-inline" href="blog-single.html"
                           tabindex="-1">Read More</a>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/blog/blog-02-1200x800.jpg" alt="">
                    </div>
                    <div class="featured-content">
                        <div class="post-header">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                            <span class="ttm-entry-date">
                                                <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span
                                                            class="entry-month entry-year">APR</span></time>
                                            </span>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                            <span class="ttm-meta-line comments-link"><i class="fa fa-comments"></i>Comments
                                            </span>
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                            </div><!-- post-meta end -->
                        </div>
                        <div class="post-title featured-title">
                            <h3><a href="blog-single.html">Does My Business Need a Director of Training?</a></h3>
                        </div>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-color-darkgrey btn-inline" href="blog-single.html"
                           tabindex="-1">Read More</a>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/blog/blog-03-1200x800.jpg" alt="">
                    </div>
                    <div class="featured-content">
                        <div class="post-header">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                            <span class="ttm-entry-date">
                                                <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span
                                                            class="entry-month entry-year">APR</span></time>
                                            </span>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                            <span class="ttm-meta-line comments-link"><i class="fa fa-comments"></i>Comments
                                            </span>
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                            </div><!-- post-meta end -->
                        </div>
                        <div class="post-title featured-title">
                            <h3><a href="blog-single.html">How to Manage Business’s Online Reputation</a></h3>
                        </div>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-color-darkgrey btn-inline" href="blog-single.html"
                           tabindex="-1">Read More</a>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="margin_top35 res-991-margin_top30 text-center">
                    <a href="blog.html" class="end_button">
                        <span>+</span>
                    </a><span class="end_button_txt ttm-textcolor-darkgrey">Explore More News</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog-section end-->
