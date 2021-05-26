<?php

use common\helper\HelperFunction;
use yii\widgets\ListView;

$this->title = 'Guideline';
?>

<?= $this->render('../parts/page-title', [
    'title' => $this->title,
    'description' => ''
]) ?>
<section id="gift-cards-page" class="bg-fixed wide-100 page-hero-section division">
    <div class="container">


        <!-- PAGE HERO TEXT -->
        <div class="row">
            <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                <div class="hero-txt text-center white-color">

                    <!-- Title -->
                    <h2 class="h2-lg">Gift Certificates</h2>

                    <!-- Text -->
                    <p class="p-lg">Sapien gravida donec pretium ipsum porta justo integer at feugiat velna vitae auctor
                        an integera magna purus
                    </p>

                </div>
            </div>
        </div>    <!-- END PAGE HERO TEXT -->


        <!-- BREADCRUMB -->
        <div id="breadcrumb">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-nav">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gift Certificates</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>	<!-- END BREADCRUMB -->


    </div>	   <!-- End container -->
</section>	<!-- END PAGE HERO -->




<!-- SERVICES-18
============================================= -->
<section id="services-18" class="bg-color-01 wide-60 services-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Gift Cards</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Experience Life With Color</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
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
                                <img class="img-fluid" src="/images/serv-13.jpg" alt="service-image" />
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
                                <img class="img-fluid" src="/images/serv-14.jpg" alt="service-image" />
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
                                <img class="img-fluid" src="/images/serv-15.jpg" alt="service-image" />
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
                                <img class="img-fluid" src="/images/serv-18.jpg" alt="service-image" />
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
                                <img class="img-fluid" src="/images/serv-17.jpg" alt="service-image" />
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
                                <img class="img-fluid" src="/images/serv-16.jpg" alt="service-image" />
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
        </div>	<!-- END SERVICES-18 WRAPPER -->


    </div>	   <!-- End container -->
</section>	<!-- END SERVICES-18 -->



<div class="bg-color-01 page-pagination division">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </nav>

            </div>
        </div>  <!-- End row -->
    </div> <!-- End container -->
</div>	<!-- END PAGE PAGINATION -->

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

