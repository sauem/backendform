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

<!--Hot news-->
<section id="about-2" class="bg-color-01 wide-60 about-section division">
    <div class="container">
        <div class="row d-flex align-items-center m-row">


            <!-- TEXT BLOCK -->
            <div class="col-md-7 col-lg-6 m-bottom">
                <div class="txt-block left-column pc-15 mb-40">

                    <!-- Title -->
                    <h3 class="h3-md txt-color-01">Làn da bị thiếu dưỡng chất do makeup</h3>

                    <!-- Text -->
                    <p class="txt-color-05">Porta semper lacus cursus, feugiat primis ultrice a ligula risus auctor an
                        tempus
                        feugiat dolor lacinia cubilia curae integer orci congue and metus mollislorem primis in integer
                        metus
                        mollis faucibus. Nullam a tempor sapien gravida donec pretium ipsum porta lacinia ultrice
                    </p>

                    <!-- List -->
                    <ul class="txt-list txt-color-05">

                        <li class="list-item">
                            <i class="fas fa-genderless"></i>
                            <p>Fringilla risus nec, luctus mauris orci auctor purus euismod at pretium purus
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
            </div>    <!-- END TEXT BLOCK -->


            <!-- IMAGE BLOCK -->
            <div class="col-md-5 col-lg-6 m-top">
                <div class="img-block right-column pc-15 mb-40">
                    <img class="img-fluid" src="/images/image-03.png" alt="about-image">
                </div>
            </div>


        </div>      <!-- End row -->
    </div>       <!-- End container -->
</section>    <!-- END ABOUT-2 -->


<!--sản phẩm-->
<section id="services-18" class="bg-color-01 services-section pb-60 division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Sản phẩm</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Sản phẩm chăm sóc da</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">
                        Từ bây giờ hãy chăm sóc làn da của bạn khoa học và tiện lợi nhất bằng các sản phẩm hỗ trợ bên dưới
                    </p>

                </div>
            </div>
        </div>


        <!-- SERVICES-18 WRAPPER -->
        <div class="sbox-18-wrapper">
            <div class="row">


                <!-- SERVICE BOX #1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-18 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-13.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-18-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Traditional Massage</h5>

                            <!-- Text -->
                            <p class="p-md txt-color-05">Massage, Spa Services</p>

                            <!-- Rating -->
                            <div class="txt-block-rating">
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="txt-color-01">$86.00</span>
                                </div>
                            </div>

                            <!-- Button -->
                            <a href="#" class="btn p-sm btn-tra-01 color-02-hover mt-20">Find Out More</a>

                        </div>

                    </div>
                </div>


                <!-- SERVICE BOX #2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-18 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-14.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-18-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Aromatherapy Facial</h5>

                            <!-- Text -->
                            <p class="p-md txt-color-05">Herbal Care, Aromatherapy</p>

                            <!-- Rating -->
                            <div class="txt-block-rating">
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="txt-color-01">$95.00</span>
                                </div>
                            </div>

                            <!-- Button -->
                            <a href="#" class="btn p-sm btn-tra-01 color-02-hover mt-20">Find Out More</a>

                        </div>

                    </div>
                </div>


                <!-- SERVICE BOX #3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-18 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-15.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-18-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Deep Tissue Massage</h5>

                            <!-- Text -->
                            <p class="p-md txt-color-05">Massage, Spa Services</p>

                            <!-- Rating -->
                            <div class="txt-block-rating">
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="txt-color-01">$120.00</span>
                                </div>
                            </div>

                            <!-- Button -->
                            <a href="#" class="btn p-sm btn-tra-01 color-02-hover mt-20">Find Out More</a>

                        </div>

                    </div>
                </div>


                <!-- SERVICE BOX #4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-18 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-18.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-18-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Oils & Aromatherapy</h5>

                            <!-- Text -->
                            <p class="p-md txt-color-05">Wellness, Aromatherapy</p>

                            <!-- Rating -->
                            <div class="txt-block-rating">
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="txt-color-01">$72.00</span>
                                </div>
                            </div>

                            <!-- Button -->
                            <a href="#" class="btn p-sm btn-tra-01 color-02-hover mt-20">Find Out More</a>

                        </div>

                    </div>
                </div>


                <!-- SERVICE BOX #5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-18 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-17.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-18-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Hydrotherapy</h5>

                            <!-- Text -->
                            <p class="p-md txt-color-05">Treatments, Spa Services</p>

                            <!-- Rating -->
                            <div class="txt-block-rating">
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="txt-color-01">$68.00</span>
                                </div>
                            </div>

                            <!-- Button -->
                            <a href="#" class="btn p-sm btn-tra-01 color-02-hover mt-20">Find Out More</a>

                        </div>

                    </div>
                </div>


                <!-- SERVICE BOX #6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-18 bg-white text-center">

                        <!-- Image -->
                        <div class="sbox-10-img">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="/images/serv-16.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-18-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Supreme Skicare</h5>

                            <!-- Text -->
                            <p class="p-md txt-color-05">Massage, Herbal Care</p>

                            <!-- Rating -->
                            <div class="txt-block-rating">
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="txt-color-01">$90.00</span>
                                </div>
                            </div>

                            <!-- Button -->
                            <a href="#" class="btn p-sm btn-tra-01 color-02-hover mt-20">Find Out More</a>

                        </div>

                    </div>
                </div>


            </div>  <!-- End row -->
        </div>    <!-- END SERVICES-18 WRAPPER -->


    </div>       <!-- End container -->
</section>    <!-- END SERVICES-18 -->


<section id="contacts-2" class="bg-color-02 wide-60 contacts-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Liên hệ</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Tư vấn và thắc mắc?</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">
                        Hãy đặt câu hỏi cho chúng tôi, chúng tôi sẽ giải đáp thắc mắc cho bạn
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
                            <input type="text" name="subject" class="form-control subject"
                                   placeholder="What's this about?">
                        </div>

                        <!-- Form Textarea -->
                        <div class="col-md-12">
                            <textarea name="message" class="form-control message" rows="6"
                                      placeholder="Your Message ..."></textarea>
                        </div>

                        <!-- Form Button -->
                        <div class="col-md-12 mt-5 text-right">
                            <button type="submit" class="btn btn-md btn-color-02 tra-02-hover submit">Send Message
                            </button>
                        </div>

                        <!-- Form Message -->
                        <div class="col-md-12 contact-form-msg text-center">
                            <div class="sending-msg"><span class="loading"></span></div>
                        </div>

                    </form>
                </div>
            </div>    <!-- END CONTACT FORM -->


            <!-- CONTACTS INFO -->
            <div class="col-md-5 col-lg-4">
                <div class="contacts-info pc-25 mb-40 txt-color-05">

                    <!-- LOCATION -->
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm">Cửa hàng</h5>
                        <p class="p-md">121 King Street, Melbourne,</p>
                        <p class="p-md">Victoria 3000 Australia</p>
                    </div>

                    <!-- PHONES -->
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm">Thông tin liên hệ</h5>
                        <p class="p-md"><span>Phone :</span> +12 3 3456 7890</p>
                        <p class="p-md"><span>Email :</span> <a
                                    href="mailto:yourdomain@mail.com">hello@yourdomain.com</a></p>
                        <p class="p-md"><span>Skype :</span> <a href="tel:123456789">support.spamagic</a></p>
                    </div>

                    <!-- EMAILS -->
                    <div class="cbox-1">
                        <h5 class="h5-sm">Giờ mở cửa</h5>
                        <p class="p-md"><span>Mon – Fri :</span> 9:00 AM - 7:00 PM</p>
                        <p class="p-md"><span>Saturday :</span> 9:00 AM - 6:00 PM</p>
                        <p class="p-md"><span>Sunday :</span> Closed</p>
                    </div>

                </div>
            </div>    <!-- END CONTACTS INFO -->


        </div>    <!-- End row -->


    </div>       <!-- End container -->
</section>    <!-- END CONTACTS-2 -->


<section id="services-10" class="bg-color-01 wide-60 services-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Tips</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Chăm sóc da tại nhà</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">
                        Bạt mí các bí quyết chăm sóc da tại nhà với nguyên liệu tự nhiên
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
                                <img class="img-fluid" src="/images/serv-13.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-10-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Combination Massage</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque
                                dolor</p>

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
                                <img class="img-fluid" src="/images/serv-14.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-10-txt">


                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Special Care Solutions</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque
                                dolor</p>

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
                                <img class="img-fluid" src="/images/serv-15.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-10-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Relaxing & Body Treatments</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque
                                dolor</p>

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
                                <img class="img-fluid" src="/images/serv-16.jpg" alt="service-image"/>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="sbox-10-txt">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Oils & Aromatherapy</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque
                                dolor</p>

                            <!-- Button -->
                            <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a>

                        </div>

                    </div>
                </div>


            </div>  <!-- End row -->
        </div>    <!-- END SERVICES-10 WRAPPER -->


    </div>       <!-- End container -->
</section>    <!-- END SERVICES-10 -->

<section id="reviews-1" class="bg-color-01 wide-100 reviews-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Đánh giá</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Khách hàng nói gì về Janami?</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">
                        Đánh giá của các khách hàng đã và đang sử dụng sản phẩm & dịch vụ của Janami
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
                            <p>Sapien sem accumsan vitae purus diam integer congue magna undo. Magna, sodales vitae
                                aenean mauris tempor risus lectus aenean magna ipsum vitae purus vitae
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
                            <p>Biologist</p>
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
                            <p>Mauris donec ociis et magnis sapien an etiam sapien sem sagittis congue augue. An orci
                                nullam
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
        </div>    <!-- END TESTIMONIALS CONTENT -->


    </div>       <!-- End container -->
</section>     <!-- END TESTIMONIALS-1 -->



<section id="banner-5" class="bg-fixed bg-image banner-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->
            <div class="col-lg-6 offset-lg-3">
                <div class="banner-5-txt text-center">

                    <!-- Title -->
                    <h2 class="h2-xl txt-color-05">Khuyễn mãi 20%</h2>
                    <h3 class="h3-xs txt-color-01">Cho các dòng sản phẩm phục hồi</h3>

                    <!-- Text -->
                    <p class="p-md txt-color-05">
                        Từ ngày 25/5/2021 Janami khuyến mãi 20% cho tất cả sản phẩm thuộc dòng phục hồi
                    </p>

                    <!-- Button -->
                    <a href="/" class="btn btn-md btn-color-02 color-01-hover">Đặt hàng ngay</a>

                </div>
            </div>    <!-- END TEXT BLOCK -->

        </div>      <!-- End row -->
    </div>       <!-- End container -->
</section>



<section id="blog-1" class="bg-color-01 wide-60 blog-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Tips</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Các bí quyết làm đẹp</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">
                        Các bí quyết làm đẹp cho chị em mùa hè này
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
                        <img class="img-fluid" src="/images/blog/img-01.jpg" alt="blog-post-image"/>
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
                        <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus impedit
                            tempor at
                            blandit sapien gravida donec ipsum undo porta justo...
                        </p>

                        <!-- Post Author -->
                        <p class="post-author txt-color-05">Jane Smith - Sep 07, 2020</p>

                    </div>

                </div>
            </div>    <!-- END  BLOG POST #1 -->


            <!-- BLOG POST #2 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <img class="img-fluid" src="/images/blog/img-02.jpg" alt="blog-post-image"/>
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
                        <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus impedit
                            tempor at
                            blandit sapien gravida donec ipsum undo porta justo...
                        </p>

                        <!-- Post Author -->
                        <p class="post-author txt-color-05">Wendy T. - Aug 31, 2020</p>

                    </div>

                </div>
            </div>    <!-- END  BLOG POST #2 -->


            <!-- BLOG POST #3 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <img class="img-fluid" src="/images/blog/img-03.jpg" alt="blog-post-image"/>
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Data -->
                        <span class="txt-color-06">Aromatherapy</span>

                        <!-- Post Title -->
                        <h5 class="h5-sm txt-color-01"><a href="single-post.html">Neque dolor primis a libero tempus an
                                impedit
                                tempor</a>
                        </h5>

                        <!-- Post Text -->
                        <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus impedit
                            tempor at
                            blandit sapien gravida donec ipsum undo porta justo...
                        </p>

                        <!-- Post Author -->
                        <p class="post-author txt-color-05">Stacey Richardson - Aug 19, 2020</p>

                    </div>

                </div>
            </div>    <!-- END  BLOG POST #3 -->


        </div>    <!-- END BLOG POSTS HOLDER -->


    </div>       <!-- End container -->
</section>

<div id="brands-1" class="bg-color-02 brands-section division">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="owl-carousel brands-carousel">


                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-11.png" alt="brand-logo"/>
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-12.png" alt="brand-logo"/>
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-13.png" alt="brand-logo"/>
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-14.png" alt="brand-logo"/>
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-15.png" alt="brand-logo">
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-16.png" alt="brand-logo"/>
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-17.png" alt="brand-logo"/>
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-18.png" alt="brand-logo"/>
                    </div>

                    <!-- BRAND LOGO IMAGE -->
                    <div class="brand-logo">
                        <img class="img-fluid" src="/images/brand-19.png" alt="brand-logo"/>
                    </div>


                </div>
            </div>
        </div>      <!-- End row -->
    </div>        <!-- End container -->
</div>

