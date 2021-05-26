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

<!-- End Services Section -->
<!-- ABOUT-2
    ============================================= -->
<section id="about-2" class="bg-color-01 wide-60 about-section division">
    <div class="container">
        <div class="row d-flex align-items-center m-row">


            <!-- TEXT BLOCK -->
            <div class="col-md-7 col-lg-6 m-bottom">
                <div class="txt-block left-column pc-15 mb-40">

                    <!-- Title -->
                    <h3 class="h3-md txt-color-01">Unlimited Luxury for Your Body and Soul</h3>

                    <!-- Text -->
                    <p class="txt-color-05">Porta semper lacus cursus, feugiat primis ultrice a ligula risus auctor an tempus
                        feugiat dolor lacinia cubilia curae integer orci congue and metus mollislorem primis in integer metus
                        mollis faucibus. Nullam a tempor sapien gravida donec pretium ipsum porta lacinia ultrice
                    </p>

                    <!-- List -->
                    <ul class="txt-list txt-color-05">

                        <li class="list-item">
                            <i class="fas fa-genderless"></i>
                            <p>Fringilla risus nec, luctus mauris  orci auctor purus euismod at pretium purus
                                pretium ligula rutrum tempor sapien
                            </p>
                        </li>

                        <li class="list-item">
                            <i class="fas fa-genderless"></i>
                            <p>Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien
                                undo pretium purus
                            </p>
                        </li>

                    </ul>

                </div>
            </div>	<!-- END TEXT BLOCK -->


            <!-- IMAGE BLOCK -->
            <div class="col-md-5 col-lg-6 m-top">
                <div class="img-block right-column pc-15 mb-40">
                    <img class="img-fluid" src="/images/image-03.png" alt="about-image">
                </div>
            </div>


        </div>	  <!-- End row -->
    </div>	   <!-- End container -->
</section>	<!-- END ABOUT-2 -->




<!-- ABOUT-3
============================================= -->
<section id="about-3" class="bg-color-01 pb-60 about-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Welcome To</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Massage Therapy Center</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <!-- ABOUT IMAGE -->
        <div class="row">
            <div class="col-md-12">
                <div class="img-block">
                    <img class="img-fluid" src="/images/image-12.jpg" alt="about-image">
                </div>
            </div>
        </div>


        <!-- ABOUT BOXES WRAPPER -->
        <div class="abox-1-wrapper">
            <div class="row d-flex align-items-center">


                <!-- ABOUT BOX #1 -->
                <div class="col-md-4">
                    <div class="abox-1 mb-40">

                        <!-- Icon -->
                        <div class="abox-1-ico ico-75 txt-color-03">
                            <span class="flaticon-relax-stones"></span>
                        </div>

                        <!-- Text -->
                        <div class="abox-1-txt">
                            <h5 class="h5-xs txt-color-01">Safety Standards</h5>
                            <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
                        </div>

                    </div>
                </div>


                <!-- ABOUT BOX #2 -->
                <div class="col-md-4">
                    <div class="abox-1 mb-40">

                        <!-- Icon -->
                        <div class="abox-1-ico ico-75 txt-color-03">
                            <span class="flaticon-herbal-2"></span>
                        </div>

                        <!-- Text -->
                        <div class="abox-1-txt">
                            <h5 class="h5-xs txt-color-01">Lifestyle Program</h5>
                            <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
                        </div>

                    </div>
                </div>


                <!-- ABOUT BOX #3 -->
                <div class="col-md-4">
                    <div class="abox-1 mb-40">

                        <!-- Icon -->
                        <div class="abox-1-ico ico-75 txt-color-03">
                            <span class="flaticon-gift"></span>
                        </div>

                        <!-- Text -->
                        <div class="abox-1-txt">
                            <h5 class="h5-xs txt-color-01">Gift Cards</h5>
                            <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
                        </div>

                    </div>
                </div>


            </div>  <!-- End row -->
        </div>	  <!-- END ABOUT BOXES WRAPPER -->


    </div>	   <!-- End container -->
</section>	<!-- END ABOUT-3 -->




<!-- VIDEO-1
============================================= -->
<div id="video-1" class="bg-fixed video-section division">
    <div class="container white-color">
        <div class="row">


            <!-- VIDEO LINK -->
            <div class="col-md-8 offset-md-2">
                <div class="video-1-preview">
                    <a class="video-popup2" href="https://www.youtube.com/embed/7e90gBu4pas">  <!-- Change the link HERE!!! -->

                        <!-- Play Icon -->
                        <div class="video-btn bg-color-09">
                            <div class="video-block-wrapper"><i class="fas fa-play"></i></div>
                        </div>

                    </a>
                </div>
            </div>	<!-- END VIDEO LINK -->


        </div>    <!-- End row -->
    </div>	   <!-- End container -->
</div>	<!-- END VIDEO-1 -->




<!-- SERVICES-10
============================================= -->
<section id="services-10" class="bg-color-01 wide-60 services-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Our Services</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">The Art Of Natural Beauty</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <!-- SERVICES-10 WRAPPER -->
        <div class="sbox-10-wrapper">
            <div class="row">


                <!-- SERVICE BOX #1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="sbox-10 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-13.jpg" alt="service-image" />
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-10-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Combination Massage</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque dolor</p>

                            <!-- Button -->
                            <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a>

                        </div>

                    </div>
                </div>


                <!-- SERVICE BOX #2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="sbox-10 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-14.jpg" alt="service-image" />
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-10-txt">


                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Special Care Solutions</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque dolor</p>

                            <!-- Button -->
                            <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a>

                        </div>

                    </div>
                </div>


                <!-- SERVICE BOX #3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="sbox-10 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-15.jpg" alt="service-image" />
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-10-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Relaxing & Body Treatments</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque dolor</p>

                            <!-- Button -->
                            <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a>

                        </div>

                    </div>
                </div>


                <!-- SERVICE BOX #4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="sbox-10 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-16.jpg" alt="service-image" />
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-10-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Oils & Aromatherapy</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque dolor</p>

                            <!-- Button -->
                            <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a>

                        </div>

                    </div>
                </div>


            </div>  <!-- End row -->
        </div>	<!-- END SERVICES-10 WRAPPER -->


    </div>	   <!-- End container -->
</section>	<!-- END SERVICES-10 -->




<!-- PRICING-2
============================================= -->
<section id="pricing-2" class="bg-color-01 pricing-section division">
    <div class="container">


        <!-- PRICING TABLES WRAPPER -->
        <div class="pricing-wrapper">
            <div class="row d-flex align-items-center">


                <!-- WORKING HOURS -->
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-2-banner bg-color-09 white-color">

                        <!-- Title -->
                        <h5 class="h5-xl">Open Hours:</h5>

                        <!-- Text -->
                        <p>An magnis nulla dolor sapien augue porta iaculis a purus tempor magna and vitae purus primis ipsum</p>

                        <h6 class="h6-xl">Monday – Friday</h6>
                        <span>9:00 AM - 7:00 PM</span>

                        <h6 class="h6-xl">Saturday</h6>
                        <span>10:00 AM - 6:00 PM</span>

                        <h6 class="h6-xl">Sunday</h6>
                        <span>Closed</span>

                        <!-- Button -->
                        <a href="booking.html" class="btn btn-md btn-tra-white white-hover mt-5">Book Now</a>

                    </div>
                </div>


                <!-- IMAGE BLOCK -->
                <div id="pb-img" class="col-lg-4">
                    <div class="pricing-2-img text-center">
                        <img class="img-fluid" src="/images/image-05.jpg" alt="pricing-image" />
                    </div>
                </div>


                <!-- SERVICE BOX #3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-2-table bg-color-02">
                        <ul class="pricing-list">

                            <li class="pricing-list-txt">
                                <h6 class="h6-lg txt-color-01">Swedish Massage</h6>
                                <p class="txt-color-05">50 Minute Session Packages</p>
                                <h6 class="h6-lg pricing-list-amount txt-color-01">$60</h6>
                            </li>

                            <li class="pricing-list-txt">
                                <h6 class="h6-lg txt-color-01">Combination Massage</h6>
                                <p class="txt-color-05">60 Minute Session Packages</p>
                                <h6 class="h6-lg pricing-list-amount txt-color-01">$65</h6>
                            </li>

                            <li class="pricing-list-txt">
                                <h6 class="h6-lgs txt-color-01">Deep Tissue Massage</h6>
                                <p class="txt-color-05">45 Minute Session Packages</p>
                                <h6 class="h6-lg pricing-list-amount txt-color-01">$65</h6>
                            </li>

                            <li class="pricing-list-txt">
                                <h6 class="h6-lg txt-color-01">Hot Stone Massage</h6>
                                <p class="txt-color-05">55 Minute Session Packages</p>
                                <h6 class="h6-lg pricing-list-amount txt-color-01">$84</h6>
                            </li>

                            <li class="pricing-list-txt resp-lst">
                                <h6 class="h6-lg txt-color-01">Relaxing Massage</h6>
                                <p class="txt-color-05">60 Minute Session Packages</p>
                                <h6 class="h6-lg pricing-list-amount txt-color-01">$55</h6>
                            </li>

                        </ul>
                    </div>
                </div>


            </div>  <!-- End row -->
        </div>	<!-- END PRICING TABLES WRAPPER -->


    </div>	   <!-- End container -->
</section>	<!-- END PRICING-2 -->




<!-- TESTIMONIALS-1
============================================= -->
<section id="reviews-1" class="bg-color-01 wide-100 reviews-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Testimonials</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">What Our Clients Say</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <!-- TESTIMONIALS CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme reviews-wrapper">


                    <!-- TESTIMONIAL #1 -->
                    <div class="review-1">

                        <!-- Testimonial Author Avatar -->
                        <div class="testimonial-avatar">
                            <img src="/images/review-author-1.jpg" alt="testimonial-avatar">
                        </div>

                        <!-- Testimonial Author -->
                        <div class="author-data txt-color-01">
                            <h6 class="h6-sm">Kelly Walke</h6>
                            <p>Housewife</p>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="review-1-txt txt-color-05">
                            <p>Sagittis congue etiam sapien sem accumsan suscipit egestas lobortis magna, porttitor
                                sodales vitae aenean mauris tempor risus lectus
                            </p>
                        </div>

                    </div>


                    <!-- TESTIMONIAL #2 -->
                    <div class="review-1">

                        <!-- Testimonial Author Avatar -->
                        <div class="testimonial-avatar">
                            <img src="/images/review-author-2.jpg" alt="testimonial-avatar">
                        </div>

                        <!-- Testimonial Author -->
                        <div class="author-data txt-color-01">
                            <h6 class="h6-sm">Linda Ferell</h6>
                            <p>Designer</p>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="review-1-txt txt-color-05">
                            <p>Sapien sem accumsan  vitae purus diam integer congue magna undo. Magna, sodales vitae
                                aenean mauris tempor risus lectus aenean magna ipsum vitae purus	vitae
                            </p>
                        </div>

                    </div>


                    <!-- TESTIMONIAL #3 -->
                    <div class="review-1">

                        <!-- Testimonial Author Avatar -->
                        <div class="testimonial-avatar">
                            <img src="/images/review-author-3.jpg" alt="testimonial-avatar">
                        </div>

                        <!-- Testimonial Author -->
                        <div class="author-data txt-color-01">
                            <h6 class="h6-sm">Evelyn Martinez</h6>
                            <p>Journalist</p>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="review-1-txt txt-color-05">
                            <p>Etiam sapien sem accumsan sagittis congue. Suscipit egestas at lobortis magna, porttitor
                                sodales vitae aenean mauris tempor risus lectus aenean diam aenean mauris
                            </p>
                        </div>

                    </div>


                    <!-- TESTIMONIAL #4 -->
                    <div class="review-1">

                        <!-- Testimonial Author Avatar -->
                        <div class="testimonial-avatar">
                            <img src="/images/review-author-4.jpg" alt="testimonial-avatar">
                        </div>

                        <!-- Testimonial Author -->
                        <div class="author-data txt-color-01">
                            <h6 class="h6-sm">Laura Merino</h6>
                            <p>Fashion Designer</p>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="review-1-txt txt-color-05">
                            <p>Egestas egestas magna ipsum vitae purus efficitur ipsum primis in cubilia laoreet augue
                                congue. An egestas lobortis magna, sodales vitae
                            </p>
                        </div>

                    </div>


                    <!-- TESTIMONIAL #5 -->
                    <div class="review-1">

                        <!-- Testimonial Author Avatar -->
                        <div class="testimonial-avatar">
                            <img src="/images/review-author-5.jpg" alt="testimonial-avatar">
                        </div>

                        <!-- Testimonial Author -->
                        <div class="author-data txt-color-01">
                            <h6 class="h6-sm">Elizabeth Ross</h6>
                            <p >Biologist</p>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="review-1-txt txt-color-05">
                            <p>An orci nullam tempor sapien, eget orci gravida donec enim ipsum porta justo integer and
                                odio velna auctor. Egestas magna ipsum vitae purus ipsum primis in laoreet augue
                            </p>
                        </div>

                    </div>


                    <!-- TESTIMONIAL #6 -->
                    <div class="review-1">

                        <!-- Testimonial Author Avatar -->
                        <div class="testimonial-avatar">
                            <img src="/images/review-author-6.jpg" alt="testimonial-avatar">
                        </div>

                        <!-- Testimonial Author -->
                        <div class="author-data txt-color-01">
                            <h6 class="h6-sm">Carmen M. Garcia</h6>
                            <p>Graphic Designer</p>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="review-1-txt txt-color-05">
                            <p>Mauris donec ociis et magnis sapien an etiam sapien sem sagittis congue augue. An orci nullam
                                tempor sapien, eget orci gravida donec porta
                            </p>
                        </div>

                    </div>


                    <!-- TESTIMONIAL #7 -->
                    <div class="review-1">

                        <!-- Testimonial Author Avatar -->
                        <div class="testimonial-avatar">
                            <img src="/images/review-author-7.jpg" alt="testimonial-avatar">
                        </div>

                        <!-- Testimonial Author -->
                        <div class="author-data txt-color-01">
                            <h6 class="h6-sm">Penelopa M.</h6>
                            <p>Manager</p>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="review-1-txt txt-color-05">
                            <p>At sagittis congue augue egestas egestas magna ipsum vitae purus ipsum primis in cubilia
                                laoreet augue diam ociis nullam tempor
                            </p>
                        </div>

                    </div>


                </div>
            </div>
        </div>	<!-- END TESTIMONIALS CONTENT -->


    </div>	   <!-- End container -->
</section>	 <!-- END TESTIMONIALS-1 -->




<!-- BANNER-5
============================================= -->
<section id="banner-5" class="bg-fixed bg-image banner-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->
            <div class="col-lg-6 offset-lg-3">
                <div class="banner-5-txt text-center">

                    <!-- Title -->
                    <h2 class="h2-xl txt-color-05">Get 20% Off</h2>
                    <h3 class="h3-xs txt-color-01">For Your First Visit</h3>

                    <!-- Text -->
                    <p class="p-md txt-color-05">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor an tempus
                        feugiat dolor undo lacinia cubilia curae
                    </p>

                    <!-- Button -->
                    <a href="booking.html" class="btn btn-md btn-color-02 color-01-hover">Book Now</a>

                </div>
            </div>	<!-- END TEXT BLOCK -->

        </div>	  <!-- End row -->
    </div>	   <!-- End container -->
</section>	<!-- END BANNER-5 -->




<!-- GALLERY-3
============================================= -->
<div id="gallery-3" class="bg-color-01 wide-100 gallery-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Our Gallery</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Beautiful Skin Starts Here</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <!-- VIDEO LINKS -->
        <div class="row">

            <!-- VIDEO LINK #1 -->
            <div class="col-md-6 mb-30">
                <div class="video-preview">
                    <a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">  <!-- Change the link HERE!!! -->

                        <!-- Play Icon -->
                        <div class="video-btn bg-color-09">
                            <div class="video-block-wrapper"><i class="fas fa-play"></i></div>
                        </div>

                        <!-- Preview Image -->
                        <img class="img-fluid" src="/images/gallery/img-13.jpg" alt="video-preview">
                    </a>
                </div>
            </div>


            <!-- VIDEO LINK #2 -->
            <div class="col-md-6 mb-30">
                <div class="video-preview">
                    <a class="video-popup2" href="https://www.youtube.com/embed/7e90gBu4pas">  <!-- Change the link HERE!!! -->

                        <!-- Play Icon -->
                        <div class="video-btn bg-color-09">
                            <div class="video-block-wrapper"><i class="fas fa-play"></i></div>
                        </div>

                        <!-- Preview Image -->
                        <img class="img-fluid" src="/images/gallery/img-14.jpg" alt="video-preview">
                    </a>
                </div>
            </div>

        </div>	<!-- END VIDEO LINKS -->


        <!-- PHOTOS CAROUSEL -->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel gallery-photo">


                    <!-- PHOTO #1 -->
                    <div class="carousel-image">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/gallery/img-1.jpg" alt="gallery-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Description -->
                            <div class="image-description white-color">
                                <div class="image-data">

                                    <!-- Image Link -->
                                    <h6 class="h6-sm"><a class="image-link" href="images/gallery/img-1.jpg">Hot Stones Therapy</a></h6>

                                    <!-- Project Meta -->
                                    <p class="p-sm">SPA & Massage Therapy</p>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- PHOTO #2 -->
                    <div class="carousel-image">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/gallery/img-2.jpg" alt="gallery-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Description -->
                            <div class="image-description white-color">
                                <div class="image-data">

                                    <!-- Image Link -->
                                    <h6 class="h6-sm"><a class="image-link" href="images/gallery/img-2.jpg">Supreme Skincare</a></h6>

                                    <!-- Image Meta -->
                                    <p class="p-sm">Aroma & Skin Care</p>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- PHOTO #3 -->
                    <div class="carousel-image">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/gallery/img-3.jpg" alt="gallery-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Description -->
                            <div class="image-description white-color">
                                <div class="image-data">

                                    <!-- Image Link -->
                                    <h6 class="h6-sm"><a class="image-link" href="images/gallery/img-3.jpg">Thai Massage</a></h6>

                                    <!-- Image Meta -->
                                    <p class="p-sm">Herbs & Skin Care</p>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- PHOTO #4 -->
                    <div class="carousel-image">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/gallery/img-8.jpg" alt="gallery-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Description -->
                            <div class="image-description white-color">
                                <div class="image-data">

                                    <!-- Image Link -->
                                    <h6 class="h6-sm"><a class="image-link" href="images/gallery/img-8.jpg">Scrub Massage</a></h6>

                                    <!-- Image Meta -->
                                    <p class="p-sm">Aroma & Massage Therapy</p>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- PHOTO #5 -->
                    <div class="carousel-image">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/gallery/img-7.jpg" alt="gallery-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Description -->
                            <div class="image-description white-color">
                                <div class="image-data">

                                    <!-- Image Link  -->
                                    <h6 class="h6-sm"><a class="image-link" href="images/gallery/img-7.jpg">Relaxing Massage</a></h6>

                                    <!-- Image Meta -->
                                    <p class="p-sm">SPA & Wellness</p>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- PHOTO #6 -->
                    <div class="carousel-image">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/gallery/img-6.jpg" alt="gallery-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Description -->
                            <div class="image-description white-color">
                                <div class="image-data">

                                    <!-- Image Link -->
                                    <h6 class="h6-sm"><a class="image-link" href="images/gallery/img-6.jpg">Deep Tissue Massage</a></h6>
                                    <!-- Image Meta -->
                                    <p class="p-sm">SPA & Massage Therapy</p>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- PHOTO #7 -->
                    <div class="carousel-image">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/gallery/img-4.jpg" alt="gallery-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Description -->
                            <div class="image-description white-color">
                                <div class="image-data">

                                    <!-- Image Link -->
                                    <h6 class="h6-sm"><a class="image-link" href="images/gallery/img-4.jpg">Deep Tissue Massage</a></h6>
                                    <!-- Image Meta -->
                                    <p class="p-sm">SPA & Massage Therapy</p>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- PHOTO #8 -->
                    <div class="carousel-image">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/gallery/img-5.jpg" alt="gallery-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Description -->
                            <div class="image-description white-color">
                                <div class="image-data">

                                    <!-- Image Link -->
                                    <h6 class="h6-sm"><a class="image-link" href="images/gallery/img-5.jpg">Deep Tissue Massage</a></h6>
                                    <!-- Image Meta -->
                                    <p class="p-sm">SPA & Massage Therapy</p>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>	 <!-- END IMAGES CAROUSEL -->


    </div>	   <!-- End container -->
</div>	 <!-- END GALLERY-3 -->




<!-- SERVICES-5
============================================= -->
<section id="services-5" class="bg-color-01 services-section division">
    <div class="container">
        <div class="row">


            <!-- SERVICES-5 IMAGE -->
            <div class="col-md-6 col-lg-5 col-xl-6">
                <div class="img-block">
                    <img class="img-fluid" src="/images/services-5-img.jpg" alt="services-image">
                </div>
            </div>


            <!-- SERVICES-5 WRAPPER -->
            <div class="col-lg-7 col-xl-6">
                <div class="sbox-5-wrapper bg-white">
                    <div class="row">


                        <!-- SERVICE BOX #1 -->
                        <div class="col-md-6">
                            <div class="sbox-5">

                                <!-- Icon -->
                                <div class="sbox-2-ico ico-90 txt-color-03">
                                    <div class="sbox-ico-bg"></div>
                                    <span class="flaticon-hot-stone"></span>
                                </div>

                                <!-- Text -->
                                <div class="sbox-5-txt">

                                    <!-- Title -->
                                    <h5 class="h5-xs txt-color-01">Massage Therapy</h5>

                                    <!-- Text -->
                                    <p class=" txt-color-05">Augue luctus neque purus an ipsum neque primis at dolor libero tempus blandit</p>

                                </div>

                            </div>
                        </div>


                        <!-- SERVICE BOX #2 -->
                        <div class="col-md-6">
                            <div class="sbox-5">

                                <!-- Icon -->
                                <div class="sbox-5-ico ico-90 txt-color-03">
                                    <div class="sbox-ico-bg"></div>
                                    <span class="flaticon-body-scrub"></span>
                                </div>

                                <!-- Text -->
                                <div class="sbox-5-txt">

                                    <!-- Title -->
                                    <h5 class="h5-xs txt-color-01">Skin Care</h5>

                                    <!-- Text -->
                                    <p class=" txt-color-05">Augue luctus neque purus an ipsum neque primis at dolor libero tempus blandit</p>

                                </div>

                            </div>
                        </div>


                        <!-- SERVICE BOX #3 -->
                        <div class="col-md-6">
                            <div class="sbox-5">

                                <!-- Icon -->
                                <div class="sbox-5-ico ico-90 txt-color-03">
                                    <div class="sbox-ico-bg"></div>
                                    <span class="flaticon-towel"></span>
                                </div>

                                <!-- Text -->
                                <div class="sbox-5-txt">

                                    <!-- Title -->
                                    <h5 class="h5-xs txt-color-01">Body Treatments</h5>

                                    <!-- Text -->
                                    <p class=" txt-color-05">Augue luctus neque purus an ipsum neque primis at dolor libero tempus blandit</p>

                                </div>

                            </div>
                        </div>


                        <!-- SERVICE BOX #4 -->
                        <div class="col-md-6">
                            <div class="sbox-5">

                                <!-- Icon -->
                                <div class="sbox-5-ico ico-90 txt-color-03">
                                    <div class="sbox-ico-bg"></div>
                                    <span class="flaticon-aromatherapy"></span>
                                </div>

                                <!-- Text -->
                                <div class="sbox-5-txt">

                                    <!-- Title -->
                                    <h5 class="h5-xs txt-color-01">Aromatherapy</h5>

                                    <!-- Text -->
                                    <p class=" txt-color-05">Augue luctus neque purus an ipsum neque primis at dolor libero tempus blandit</p>

                                </div>

                            </div>
                        </div>


                        <!-- SERVICE BOX #5 -->
                        <div class="col-md-6">
                            <div class="sbox-5">

                                <!-- Icon -->
                                <div class="sbox-5-ico ico-90 txt-color-03">
                                    <div class="sbox-ico-bg"></div>
                                    <span class="flaticon-hot-tub"></span>
                                </div>

                                <!-- Text -->
                                <div class="sbox-5-txt">

                                    <!-- Title -->
                                    <h5 class="h5-xs txt-color-01">Hydrotherapy</h5>

                                    <!-- Text -->
                                    <p class=" txt-color-05">Augue luctus neque purus an ipsum neque primis at dolor libero tempus blandit</p>

                                </div>

                            </div>
                        </div>


                        <!-- SERVICE BOX #6 -->
                        <div class="col-md-6">
                            <div class="sbox-5">

                                <!-- Icon -->
                                <div class="sbox-5-ico ico-90 txt-color-03">
                                    <div class="sbox-ico-bg"></div>
                                    <span class="flaticon-herb"></span>
                                </div>

                                <!-- Text -->
                                <div class="sbox-5-txt">

                                    <!-- Title -->
                                    <h5 class="h5-xs txt-color-01">Herbal Care</h5>

                                    <!-- Text -->
                                    <p class=" txt-color-05">Augue luctus neque purus an ipsum neque primis at dolor libero tempus blandit</p>

                                </div>

                            </div>
                        </div>


                    </div>  <!-- End row -->
                </div>
            </div>	<!-- END SERVICES-5 WRAPPER -->


        </div>	   <!-- End row -->
    </div>	   <!-- End container -->
</section>	<!-- END SERVICES-5 -->




<!-- PRICING-1
============================================= -->
<section id="pricing-1" class="bg-color-01 wide-60 pricing-section division">
    <div class="container">


        <!-- PRICING TABLES WRAPPER -->
        <div class="pricing-wrapper">
            <div class="row">


                <div class="col-lg-6">
                    <div class="pricing-1-table">

                        <!-- Title -->
                        <h3 class="h3-xs txt-color-01 text-center mb-50">Massages</h3>

                        <!-- List -->
                        <ul class="pricing-list">

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Swedish Massage</h5>
                                <p class="txt-color-05">50 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$60</h4>
                            </li>

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Combination Massage</h5>
                                <p class="txt-color-05">60 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$65</h4>
                            </li>

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Deep Tissue Massage</h5>
                                <p class="txt-color-05">45 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$65</h4>
                            </li>

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Hot Stone Massage</h5>
                                <p class="txt-color-05">55 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$84</h4>
                            </li>

                            <li class="pricing-list-txt resp-lst">
                                <h5 class="h5-md txt-color-01">Relaxing Massage</h5>
                                <p class="txt-color-05">60 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$55</h4>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-1-table">

                        <!-- Title -->
                        <h3 class="h3-xs txt-color-01 text-center mb-50">Treatments</h3>

                        <!-- List -->
                        <ul class="pricing-list">

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Aroma- Balance</h5>
                                <p class="txt-color-05">50 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$80</h4>
                            </li>

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Supreme Skicare</h5>
                                <p class="txt-color-05">60 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$119</h4>
                            </li>

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Calming Facial</h5>
                                <p class="txt-color-05">55 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$87</h4>
                            </li>

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Aromatherapy Facial</h5>
                                <p class="txt-color-05">70 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$95</h4>
                            </li>

                            <li class="pricing-list-txt">
                                <h5 class="h5-md txt-color-01">Coconut Body</h5>
                                <p class="txt-color-05">40 Minute Session Packages</p>
                                <h4 class="h4-xs pricing-list-amount txt-color-01">$90</h4>
                            </li>

                        </ul>
                    </div>
                </div>


            </div>	<!-- End row -->
        </div>	<!-- END PRICING TABLES WRAPPER -->


    </div>	   <!-- End container -->
</section>	<!-- END PRICING-1 -->




<!-- ABOUT-6
============================================= -->
<section id="about-6" class="bg-01 about-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->
            <div class="col-md-7 col-lg-6">
                <div class="txt-block">

                    <!-- Title -->
                    <h3 class="h3-lg txt-color-01">Want to Make a Booking or Have a Question?</h3>

                    <!-- Text -->
                    <p class="p-xl txt-color-01">Call us : <span>+12 9 8765 4321</span> or fill out our online booking & equiry
                        form and we will contact you
                    </p>

                    <!-- Button -->
                    <a href="booking.html" class="btn btn-md btn-color-02 color-01-hover">Make an Appointment</a>

                </div>
            </div>	<!-- END TEXT BLOCK -->


            <!-- IMAGE BLOCK -->
            <div class="col-md-5 col-lg-6">
                <div class="about-6-img">
                    <img class="img-fluid" src="/images/image-04.jpg" alt="about-image">
                </div>
            </div>


        </div>	  <!-- End row -->
    </div>     <!-- End container -->
</section>	<!-- END ABOUT-6 -->




<!-- SERVICES-11
============================================= -->
<section id="services-11" class="bg-color-01 wide-60 services-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Packages</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Relax, Renew, Revitalize</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <!-- SERVICES-11 WRAPPER -->
        <div class="sbox-11-wrapper">
            <div class="row">


                <!-- SERVICE BOX #1 -->
                <div class="col-md-6">
                    <div class="sbox-11">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/serv-13.jpg" alt="service-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Meta -->
                            <div class="sbox-11-img-meta white-color">

                                <!-- Text -->
                                <div class="sb-11-txt">
                                    <h5 class="h5-lg">Combination Massage</h5>
                                    <ul class="simple-list">
                                        <li class="list-item"><p>Dtox Custom Massage (20 min)</p></li>
                                        <li class="list-item"><p>Dtox Custom Facial (50 min)</p></li>
                                    </ul>
                                </div>

                                <!-- Price -->
                                <div class="sbox-11-price">
                                    <div class="sb-11-data">
                                        <span>$65</span>
                                        <a href="service-details.html" class="btn btn-sm btn-tra-white color-02-hover">Read More</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>	<!-- END SERVICE BOX #1 -->


                <!-- SERVICE BOX #2 -->
                <div class="col-md-6">
                    <div class="sbox-11">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/serv-16.jpg" alt="service-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Meta -->
                            <div class="sbox-11-img-meta white-color">

                                <!-- Text -->
                                <div class="sb-11-txt">
                                    <h5 class="h5-lg">Supreme Skicare</h5>
                                    <ul class="simple-list">
                                        <li class="list-item"><p>Organic Sea Salt Scrub (30 min)</p></li>
                                        <li class="list-item"><p>Soothing Skin Body Wrap (40 min)</p></li>
                                        <li class="list-item"><p>Soothing Skin Body Wrap (20 min)</p></li>
                                    </ul>
                                </div>

                                <!-- Price -->
                                <div class="sbox-11-price">
                                    <div class="sb-11-data">
                                        <span>$119</span>
                                        <a href="service-details.html" class="btn btn-sm btn-tra-white color-02-hover">Read More</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>	<!-- END SERVICE BOX #2 -->


                <!-- SERVICE BOX #3 -->
                <div class="col-md-6">
                    <div class="sbox-11">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/serv-19.jpg" alt="service-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Meta -->
                            <div class="sbox-11-img-meta white-color">

                                <!-- Text -->
                                <div class="sb-11-txt">
                                    <h5 class="h5-lg">Hot Stones Massage</h5>
                                    <ul class="simple-list">
                                        <li class="list-item"><p>Organic Sea Salt Scrub (20 min)</p></li>
                                        <li class="list-item"><p>Soothing Skin Body Wrap (50 min)</p></li>
                                    </ul>
                                </div>

                                <!-- Price -->
                                <div class="sbox-11-price">
                                    <div class="sb-11-data">
                                        <span>$85</span>
                                        <a href="service-details.html" class="btn btn-sm btn-tra-white color-02-hover">Read More</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>	<!-- END SERVICE BOX #3 -->


                <!-- SERVICE BOX #4 -->
                <div class="col-md-6">
                    <div class="sbox-11">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="/images/serv-17.jpg" alt="service-image" />
                            <div class="item-overlay"></div>

                            <!-- Image Meta -->
                            <div class="sbox-11-img-meta white-color">

                                <!-- Text -->
                                <div class="sb-11-txt">
                                    <h5 class="h5-lg">Relaxing Massage</h5>
                                    <ul class="simple-list">
                                        <li class="list-item"><p>Organic Sea Salt Scrub (20 min)</p></li>
                                        <li class="list-item"><p>Soothing Skin Body Wrap (50 min)</p></li>
                                    </ul>
                                </div>

                                <!-- Price -->
                                <div class="sbox-11-price">
                                    <div class="sb-11-data">
                                        <span>$55</span>
                                        <a href="service-details.html" class="btn btn-sm btn-tra-white color-02-hover">Read More</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>	<!-- END SERVICE BOX #4 -->


            </div>  <!-- End row -->
        </div>	<!-- END SERVICES-11 WRAPPER -->


    </div>	   <!-- End container -->
</section>	<!-- END SERVICES-11 -->




<!-- BRANDS-1
============================================= -->
<div id="brands-1" class="bg-color-02 brands-section division">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="owl-carousel brands-carousel">


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-11.png" alt="brand-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-12.png" alt="brand-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-13.png" alt="brand-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-14.png" alt="brand-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-15.png" alt="brand-logo">
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-16.png" alt="brand-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-17.png" alt="brand-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-18.png" alt="brand-logo" />
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-19.png" alt="brand-logo" />
                    </div>


                </div>
            </div>
        </div>      <!-- End row -->
    </div>	    <!-- End container -->
</div>	<!-- END BRANDS-1 -->




<!-- TEAM-1
============================================= -->
<section id="team-1" class="bg-color-01 wide-60 team-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Our Team</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Relax, You're In Good Hands</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <!-- TEAM MEMBERS WRAPPER -->
        <div class="tm-wrapper">
            <div class="row">


                <!-- TEAM MEMBER #1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="team-member">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <div class="hover-overlay">

                                <img class="img-fluid" src="/images/team-1.jpg" alt="team-member-foto">

                                <!-- Social Icons -->
                                <div class="tm-social clearfix">
                                    <ul class="text-center clearfix">
                                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Team Member Meta -->
                        <div class="tm-meta">
                            <h6 class="h6-lg txt-color-01">Stacey Richardson</h6>
                            <span class="txt-color-06">Beauty Expert</span>
                        </div>

                    </div>
                </div>


                <!-- TEAM MEMBER #2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="team-member">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <div class="hover-overlay">

                                <img class="img-fluid" src="/images/team-2.jpg" alt="team-member-foto">

                                <!-- Social Icons -->
                                <div class="tm-social clearfix">
                                    <ul class="text-center clearfix">
                                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Team Member Meta -->
                        <div class="tm-meta">
                            <h6 class="h6-lg txt-color-01">Jennifer Harper</h6>
                            <span class="txt-color-06">SPA Master</span>
                        </div>

                    </div>
                </div>


                <!-- TEAM MEMBER #3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="team-member">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <div class="hover-overlay">

                                <img class="img-fluid" src="/images/team-3.jpg" alt="team-member-foto">

                                <!-- Social Icons -->
                                <div class="tm-social clearfix">
                                    <ul class="text-center clearfix">
                                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Team Member Meta -->
                        <div class="tm-meta">
                            <h6 class="h6-lg txt-color-01">Rodney Stratton</h6>
                            <span class="txt-color-06">Beautician</span>
                        </div>

                    </div>
                </div>


                <!-- TEAM MEMBER #4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="team-member">

                        <!-- Team Member Photo -->
                        <div class="team-member-photo">
                            <div class="hover-overlay">

                                <img class="img-fluid" src="/images/team-4.jpg" alt="team-member-foto">

                                <!-- Social Icons -->
                                <div class="tm-social clearfix">
                                    <ul class="text-center clearfix">
                                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Team Member Meta -->
                        <div class="tm-meta">
                            <h6 class="h6-lg txt-color-01">Jane Smith</h6>
                            <span class="txt-color-06">Beauty Therapist</span>
                        </div>

                    </div>
                </div>


            </div>	<!-- End row -->
        </div>	<!-- END TEAM MEMBERS WRAPPER -->


    </div>	   <!-- End container -->
</section>	<!-- END TEAM-1 -->




<!-- BANNER-2
============================================= -->
<section id="banner-2" class="bg-fixed wide-100 banner-section division">
    <div class="container">
        <div class="row">


            <!-- BANNER TEXT -->
            <div class="col-md-6 col-lg-5">
                <div class="banner-2-txt white-color">

                    <!-- Title -->
                    <h2>50% OFF</h2>
                    <h3 class="h3-sm">Aroma and Jet Hydrotherapy!</h3>

                    <!-- Text -->
                    <p class="p-md">Donec vel sapien augue integer urna turpis cursus porta, mauris sed augue luctus dolor
                        velna auctor congue tempus an integer
                    </p>

                    <!-- Button -->
                    <a href="pricing.html" class="btn btn-md btn-color-02 tra-white-hover">Find Out More</a>

                </div>
            </div>	<!-- END BANNER TEXT -->


        </div>    <!-- End row -->
    </div>	   <!-- End container -->
</section>	<!-- END BANNER-2 -->




<!-- BLOG-1
============================================= -->
<section id="blog-1" class="bg-color-01 wide-60 blog-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Our Blog</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Latest News & Events</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <!-- BLOG POSTS HOLDER -->
        <div class="row">


            <!-- BLOG POST #1 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <img class="img-fluid" src="/images/blog/img-01.jpg" alt="blog-post-image" />
                    </div>

                    <!-- BLOG POST TITLE -->
                    <div class="blog-post-txt">

                        <!-- Post Data -->
                        <span class="txt-color-06">Skincare</span>

                        <!-- Post Title -->
                        <h5 class="h5-sm txt-color-01">
                            <a href="single-post.html">Quaerat neque purus ipsum neque dolor primis libero</a>
                        </h5>

                        <!-- Post Text -->
                        <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor at
                            blandit sapien gravida donec ipsum undo porta justo...
                        </p>

                        <!-- Post Author -->
                        <p class="post-author txt-color-05">Jane Smith - Sep 07, 2020</p>

                    </div>

                </div>
            </div>	<!-- END  BLOG POST #1 -->


            <!-- BLOG POST #2 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <img class="img-fluid" src="/images/blog/img-02.jpg" alt="blog-post-image" />
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Data -->
                        <span class="txt-color-06">Massage Therapy</span>

                        <!-- Post Title -->
                        <h5 class="h5-sm txt-color-01">
                            <a href="single-post.html">Tempor blandit sapien at gravida donec ipsum</a>
                        </h5>

                        <!-- Post Text -->
                        <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor at
                            blandit sapien gravida donec ipsum undo porta justo...
                        </p>

                        <!-- Post Author -->
                        <p class="post-author txt-color-05">Wendy T. - Aug 31, 2020</p>

                    </div>

                </div>
            </div>	<!-- END  BLOG POST #2 -->


            <!-- BLOG POST #3 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <img class="img-fluid" src="/images/blog/img-03.jpg" alt="blog-post-image" />
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Data -->
                        <span class="txt-color-06">Aromatherapy</span>

                        <!-- Post Title -->
                        <h5 class="h5-sm txt-color-01"><a href="single-post.html">Neque dolor primis a libero tempus an impedit
                                tempor</a>
                        </h5>

                        <!-- Post Text -->
                        <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor at
                            blandit sapien gravida donec ipsum undo porta justo...
                        </p>

                        <!-- Post Author -->
                        <p class="post-author txt-color-05">Stacey Richardson - Aug 19, 2020</p>

                    </div>

                </div>
            </div>	<!-- END  BLOG POST #3 -->


        </div>	<!-- END BLOG POSTS HOLDER -->


    </div>	   <!-- End container -->
</section>	<!-- END BLOG-1 -->




<!-- CONTACTS-2
============================================= -->
<section id="contacts-2" class="bg-color-02 wide-60 contacts-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Contact Us</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Have Any Questions?</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <div class="row">


            <!-- CONTACT FORM -->
            <div class="col-md-7 col-lg-8">
                <div class="form-holder mb-40 pc-25">
                    <form name="contactform" class="row contact-form">

                        <!-- Form Input -->
                        <div class="col-lg-6">
                            <input type="text" name="name" class="form-control name" placeholder="Your Name*">
                        </div>

                        <!-- Form Input -->
                        <div class="col-lg-6">
                            <input type="email" name="email" class="form-control email" placeholder="Email Address*">
                        </div>

                        <!-- Form Input -->
                        <div class="col-md-12">
                            <input type="text" name="subject" class="form-control subject" placeholder="What's this about?">
                        </div>

                        <!-- Form Textarea -->
                        <div class="col-md-12">
                            <textarea name="message" class="form-control message" rows="6" placeholder="Your Message ..."></textarea>
                        </div>

                        <!-- Form Button -->
                        <div class="col-md-12 mt-5 text-right">
                            <button type="submit" class="btn btn-md btn-color-02 tra-02-hover submit">Send Message</button>
                        </div>

                        <!-- Form Message -->
                        <div class="col-md-12 contact-form-msg text-center">
                            <div class="sending-msg"><span class="loading"></span></div>
                        </div>

                    </form>
                </div>
            </div>	<!-- END CONTACT FORM -->


            <!-- CONTACTS INFO -->
            <div class="col-md-5 col-lg-4">
                <div class="contacts-info pc-25 mb-40 txt-color-05">

                    <!-- LOCATION -->
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm">Our Location</h5>
                        <p class="p-md">121 King Street, Melbourne,</p>
                        <p class="p-md">Victoria 3000 Australia</p>
                    </div>

                    <!-- PHONES -->
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm">Contact Info</h5>
                        <p class="p-md"><span>Phone :</span> +12 3 3456 7890</p>
                        <p class="p-md"><span>Email :</span> <a href="mailto:yourdomain@mail.com">hello@yourdomain.com</a></p>
                        <p class="p-md"><span>Skype :</span> <a href="tel:123456789">support.spamagic</a></p>
                    </div>

                    <!-- EMAILS -->
                    <div class="cbox-1">
                        <h5 class="h5-sm">Working Hours</h5>
                        <p class="p-md"><span>Mon – Fri :</span> 9:00 AM - 7:00 PM</p>
                        <p class="p-md"><span>Saturday :</span> 9:00 AM - 6:00 PM</p>
                        <p class="p-md"><span>Sunday :</span> Closed</p>
                    </div>

                </div>
            </div>	<!-- END CONTACTS INFO -->


        </div>	<!-- End row -->


    </div>	   <!-- End container -->
</section>	<!-- END CONTACTS-2 -->

