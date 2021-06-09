<?php

/* @var $this yii\web\View */

use common\helper\HelperFunction;
use yii\helpers\ArrayHelper;
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
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title without-seperator title-style-center_text">
                    <div class="title-header">
                        <h2 class="title"><?= Yii::t('app', 'service_and_commit') ?></h2>
                    </div>
                    <div class="title-desc">
                        <p><?= ArrayHelper::getValue(Yii::$app->params, 'service_commit_' . HelperFunction::getLanguage()) ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-equal-height">
            <?php
            $services = ArrayHelper::getValue(Yii::$app->params, 'service_commit_items.' . HelperFunction::getLanguage());
            if (!empty($services)) {
                foreach ($services as $service) {
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style1">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                    <i class="flaticon <?= $service['icon'] ?>"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><?= $service['title'] ?></h3>
                                </div>
                                <div class="featured-desc">
                                    <p><?= $service['desc'] ?></p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <?php
                }
                ?>
                <?php
            }
            ?>
        </div>
    </div>
</section>

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
                                        <h2 class="title"><?= Yii::t('app', 'how_can_help') ?></h2>
                                    </div>
                                    <div class="title-desc">
                                        <?= nl2br(HelperFunction::setting('event_desc')) ?>
                                    </div>
                                </div><!-- section title end -->
                                <div class="padding_top15 padding_bottom30 res-991-padding_bottom30">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box icon-align-before-content style2 icon-ver_align-top">
                                        <h3><?= Yii::t('app', 'why_chose_us') ?></h3>
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
                        <h2 class="title"><?= Yii::t('app', 'customer_say') ?></h2>
                    </div>

                </div><!-- section-title end -->
            </div>
        </div><!-- row end -->
        <div class="row slick_slider"
             data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>

            <?php if (!empty($testimonials)) {
                foreach ($testimonials as $testimonial) {
                    ?>
                    <div class="col-lg-6">
                        <!-- testimonials -->
                        <div class="testimonials ttm-testimonial-box-view-style1">
                            <div class="testimonial-content">
                                <div class="testimonial-content-inner">
                                    <div class="d-flex align-items-center">
                                        <div class="testimonial-avatar">
                                            <!-- testimonials-img -->
                                            <div class="testimonial-img">
                                                <img class="img-center" src="<?= $testimonial->avatar ?>"
                                                     alt="testimonial-img">
                                            </div><!-- testimonials-img end-->
                                        </div>
                                        <!-- testimonials-caption -->
                                        <div class="testimonial-caption">

                                            <h3><?= $testimonial->name ?></h3>
                                            <label><?= $testimonial->position ?></label>
                                        </div>
                                    </div><!-- testimonials-caption end -->
                                </div>
                                <blockquote>
                                    <?= $testimonial->message ?>
                                </blockquote>
                            </div>
                        </div>
                        <!-- testimonials END -->
                    </div>
                    <?php
                }
            } ?>


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
                        <h2 class="title">
                            <?= HelperFunction::params('video_intro_title') ?>
                        </h2>
                    </div>
                </div><!-- section-title end -->
                <div class="d-inline-block">
                    <a href="<?= Yii::$app->params['video_intro'] ?>" target="_self"
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
                        <h2 class="title"><?= Yii::t('app', 'news') ?></h2>
                    </div>
                    <div class="title-desc">
                        <p>
                            <?= HelperFunction::params('new_desc') ?>
                        </p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <div class="row slick_slider"
             data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
            <?php if (!empty($articles)) {
                foreach ($articles as $article) {
                    ?>
                    <div class="col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="<?= $article->avatar ?>" alt="">
                            </div>
                            <div class="featured-content">
                                <div class="post-title featured-title">
                                    <h3><a href="/<?= BLOG ?>"><?= $article->name ?></a></h3>
                                    <small><i class="ti ti-calendar"></i>  <?= date('d/m/Y', $article->created_at) ?></small>

                                    <p><?= $article->excerpt ?></p>
                                </div>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-color-darkgrey btn-inline"
                                   href="/<?= BLOG ?>"
                                   tabindex="-1">
                                    <?= Yii::t('app', 'read_more') ?>
                                </a>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <?php
                }
            } ?>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="margin_top35 res-991-margin_top30 text-center">
                    <a href="/<?= BLOG ?>" class="end_button">
                        <span>+</span>
                    </a><span class="end_button_txt ttm-textcolor-darkgrey"><?= Yii::t('app', 'more_news') ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog-section end-->
