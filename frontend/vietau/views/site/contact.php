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
<!-- Map Section -->
<div class="map-section">
    <div class="contact-map-area">
        <iframe class="contact-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd"
                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- End Map Section -->

<!-- Contact Page Section -->
<div class="contact-page-section">
    <div class="auto-container">
        <!-- Contact Info Boxed -->
        <div class="contact-info-boxed">
            <div class="row clearfix">

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <h2>Brooklyn, <span>New York</span></h2>
                    <div class="text">849 Diamond Str, 07th Floor, NY 10012, New York, <br> United State America</div>
                    <div class="email">Email: <a href="mailto:infor@consulte.co">infor@consulte.co</a></div>
                </div>

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="call">Call directly:<br><a href="#">+1 212-226-3126</a></div>
                    <ul class="location-list">
                        <li><span>Brand Offices:</span>Allentown PA | Allanta, GA | Chicago, IL | Dallas, TX, <br>
                            Edison, NJ | Houston, TX
                        </li>
                        <li><span>Work Hours:</span>Mon - Sat: 8.00 - 17.00, Sunday closed</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Form Boxed -->
        <div class="form-boxed">
            <div class="sec-title centered">
                <div class="title">LIÊN HỆ</div>
                <h2>Chúng tôi luôn ở đây <span> để giúp bạn</span></h2>
            </div>

            <div class="boxed-inner">
                <!-- Contact Form -->
                <div class="contact-form">
                    <?= $this->render('../parts/form-contact', [
                        'model' => $model
                    ]) ?>
                </div>
                <!--End Contact Form -->
            </div>

        </div>

    </div>
</div>

