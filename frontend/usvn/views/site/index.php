<?php

/* @var $this yii\web\View */

use common\helper\HelperFunction;

$this->title = HelperFunction::getLanguage() == 'vi' ?
    HelperFunction::setting('site_name') :
    HelperFunction::setting('site_name_en');
Yii::$app->params['footer_type'] = 'light';
?>

<!-- Services Section -->
<?= $this->render('../parts/slider', [
    'sliders' => $sliders
]) ?>

<?php if (!empty($articles)) { ?>
    <section class="portfolio-grid portfolio-grid-carousel pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading mb-50">
                        <div class="d-flex align-items-center">
                            <div class="divider divider-primary mr-30"></div>
                            <h2 class="heading__subtitle mb-0"><?= Yii::t('app', 'news') ?></h2>
                        </div>
                        <h3 class="heading__title mb-0"><?= Yii::t('app', 'market_vietnam') ?></h3>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 3, "slidesToScroll": 2, "arrows": true, "dots": true, "autoplay": true,"autoplaySpeed": 3000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <?php foreach ($articles as $k => $article) { ?>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="<?= $article->avatar ?>" alt="<?= $article->name ?>">
                                </div><!-- /.portfolio-img -->
                                <div class="portfolio__content">
                                    <h4 class="portfolio__title text-2">
                                        <a href="<?= HelperFunction::Link(BLOG, $article->slug, $article->archive->slug) ?>">
                                            <?= \yii\helpers\StringHelper::truncateWords($article->name, 20, '...') ?>
                                        </a>
                                    </h4>
                                    <p class="portfolio__desc text-4"><?= $article->excerpt ?></p>
                                    <a href="<?= HelperFunction::Link(BLOG, $article->slug, $article->archive->slug) ?>"
                                       class="btn btn__secondary btn__link">
                                        <span><?= Yii::t('app', 'read_more') ?></span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.portfolio-content -->
                            </div>
                        <?php } ?>
                    </div><!-- /.carousel -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php } ?>

<section class="about-layout4 pt-50 pb-0">
    <div class="container">
        <div class="row heading">
            <div class="col-12">
                <div class="d-flex align-items-center mb-20">
                    <div class="divider divider-primary mr-30"></div>
                    <h2 class="heading__subtitle mb-0"><?= Yii::t('app', 'about_us') ?></h2>
                </div>
            </div><!-- /.col-12 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h3 class="heading__title mb-40"><?= Yii::t('app', 'company_name') ?></h3>
                <div class="about__img">
                    <img src="/usvn/images/videoimg.jpeg" alt="about">
                </div><!-- /.about-img -->
                <div class="video__btn-wrapper">
                    <a class="video__btn video__btn-white popup-video"
                       href="/usvn/images/logo-clip.mp4">
                        <div class="video__player">
                            <i class="fa fa-play"></i>
                        </div>
                        <span class="video__btn-title"><?= Yii::t('app', 'video_intro') ?></span>
                    </a>
                </div>
            </div><!-- /.col-lg-6 -->
            <?php if (HelperFunction::getLanguage() == 'vi') { ?>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p>
                        <b>Lĩnh vực hoạt động</b><br>
                        Trong bối cảnh nền kinh tế phát triển và nhu cầu hàng hóa gia tăng, Công ty TNHH USVN EXPORT
                        LOGISTICS được thành lập năm 2020, chuyên quản lý chuỗi cung ứng, thu mua và hỗ trợ các hoạt
                        động Xuất - Nhập khẩu.
                        <br>
                        <b>Sản phẩm/Dịch vụ</b><br>
                        Công ty TNHH USVN EXPORT LOGISTICS tập trung vào các sản phẩm PPE, khoáng sản, kim loại quý, gỗ
                        và vật liệu xây dựng cần thiết cho thị trường Châu Á và quốc tế, đặc biệt là Hoa Kỳ.
                        <br>
                        <b>Phương châm</b><br>
                        Với phương châm ""Mang nước Mỹ và Việt Nam cùng nhau"", USVN không ngừng cố gắng, đổi mới và
                        sáng tạo để phát triển mối quan hệ giữa Việt Nam và Hoa Kỳ, đem đến cho khách hàng trải nghiệm
                        tuyệt vời và đáp ứng mọi sự mong đợi của đối tác, khách hàng.
                        <br>
                        <b>Giá trị cốt lõi</b><br>
                        Mang đến giải pháp quản lý chuỗi cung ứng, sản xuất và cung cấp sản phẩm uy tín, chất lượng.
                        <br>
                        <b>Tầm nhìn</b><br>
                        Tận dụng sự dịch chuyển của chuỗi cung ứng toàn cầu để mang lại lợi thế cho cả Việt Nam và Hoa
                        Kỳ. <br>
                        Mở rộng hợp tác kinh tế với các nước trên toàn cầu.
                        <br>
                        <b> Sứ mệnh</b><br>
                        Tận dụng chuỗi cung ứng toàn cầu thay đổi, USVN EXPORT LOGISTICS mang các cơ hội của thế kỷ 21
                        cho các thị trường mới nổi và các thị trường phát triển. <br>
                        Tập trung đưa Việt Nam và khu vực Đông Nam Á vươn tầm thể giới, sánh vai với Hoa Kỳ và các nước
                        phương Tây. <br>
                        Mang vẻ đẹp Chân thành - Thiện lương - Nhẫn nại của USVN EXPORT LOGISTICS ra thể giới.
                        <br>
                        <b> Cam kết</b><br>
                        Giúp phát triển chuỗi cung ứng sản xuất và các nhà máy sản xuất tại Việt Nam và Đông Nam Á cung
                        cấp cho thị trường Mỹ và phương Tây. <br>
                        Vượt chỉ tiêu kim ngạch Xuất - Nhập khẩu của Việt Nam. <br>
                        Sản phẩm chất lượng. <br>
                        Dịch vụ nhanh, an toàn và cẩn thận. <br>
                        Phong cách Chân thật - Thiện lương - Nhẫn nại.

                    </p>

                </div>
            <?php } else { ?>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p>
                        <b>Field operations</b><br>
                        In the context of the developing economy and increasing commodity needs, USVN EXPORT LOGISTICS
                        was established in 2020 and specialized in managing supply chains, purchase, and support Import
                        - Export activities.
                        <br>
                        <b>Product/Service</b><br>
                        USVN EXPORT LOGISTICS focuses on products such as PPE, minerals, valueble metal, wood, and
                        essential building materials for Asia and international market, especially the U.S.
                        <br>
                        <b>Motto</b><br>
                        With the ""Bring America and Vietnam together"" motto, USVN always tries its best to innovate
                        and create to strengthen the relationship between America and Vietnam, create amazing customer
                        experience, and meet the expectation of all partners and customers.
                        <br>
                        <b>Core value</b><br>
                        A solution for managing supply chains, production, and provide reliable and quality products.
                        <br>
                        <b>Vision</b><br>
                        To make use of changes in the global supply chain to bring enormous benefits to Vietnam and the
                        U.S.<br>
                        To expand economic operations with other countries in the world.
                        <br>
                        <b>Mission</b><br>
                        Make use of changes in the global supply chain, USVN creates opportunities for new emerging
                        markets and developing markets.<br>
                        Focus on facilitating Vietnam and Southeast Asia to reach out to the world, to be well-matched
                        with the U.S and Western countries.<br>
                        Share the ""Truthfulness - Benevolence - Forbearance"" beauty of USVN to the world<br>

                        <b>Commitments</b><br>
                        Help to develop the supply chains and factories in Vietnam and Southeast Asian which provide for
                        American and Western markets.<br>
                        Overcome the Import - Export turnover target of Vietnam.<br>
                        Quality products.<br>
                        Fast, safe, and careful service<br>
                        Truthfulness - Benevolence - Forbearance<br>
                    </p>
                </div>
            <?php } ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- ========================
    Services Carousel
=========================== -->
<?php if (!empty($products)) { ?>
    <section class="services-layout2 services-carousel pt-130 bg-gray">
        <div class="container">
            <div class="row heading mb-40">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div class="divider divider-primary mr-30"></div>
                        <h2 class="heading__subtitle mb-0"><?= Yii::t('app', 'products') ?></h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title"><?= Yii::t('app', 'products_new') ?></h3>
                </div><!-- /col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <p class="heading__desc">Các mặt hàng mới được xuất khẩu nhiều nhất, giá cả và triết khẩu cạnh tranh
                        từ
                        USVN</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 3, "slidesToScroll": 2, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <?php foreach ($products as $p => $product) { ?>
                            <div class="service-item">
                                <div class="service__content">
                                    <div class="service__icon">
                                        <img src="<?= $product->avatar ?>"/>
                                    </div><!-- /.service__icon -->
                                    <h4 class="service__title text-2"><?= $product->name ?></h4>
                                    <p class="service__desc text-3"><?= $product->excerpt ?> </p>
                                    <a href="<?= HelperFunction::Link(PRODUCT, $product->slug, HelperFunction::fistArchive($product)) ?>"
                                       class="btn btn__secondary">
                                        <span><?= Yii::t('app', 'detail') ?></span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service-content -->
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 btn-wrapper">
                    <a href="/<?= PRODUCT_AND_BRIEF ?>" class="btn btn__secondary btn__bordered btn__icon">
                        <span><?= Yii::t('app', 'product_and_brief') ?></span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
    <div class="bg-img"><img src="/usvn/images/banners/5.jpg" alt="background"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
                <div>
                    <div class="heading heading-light">
                        <h3 class="heading__title mb-30"><?= Yii::t('app', 'usvn_info') ?></h3>
                        <p class="heading__desc mb-30">
                            <strong><?= Yii::t('app', 'address') ?> :
                                <?= HelperFunction::setting('address_1', true) ?>
                                <br>
                                <?= HelperFunction::setting('address_2', true) ?>
                            </strong>
                        </p>

                        <p class="heading__desc mb-30">
                            <strong><?= Yii::t('app', 'email') ?> :
                                <a class="text-white"
                                   href="mailto:<?= HelperFunction::setting('email') ?>">
                                    <?= HelperFunction::setting('email') ?></a>
                            </strong>
                        </p>
                        <p class="heading__desc mb-30">
                            <strong><?= Yii::t('app', 'hotline') ?> :
                                <a class="text-white" href="tel:<?= HelperFunction::setting('hotline_1') ?>">
                                    <?= HelperFunction::setting('hotline_1') ?>
                                </a>
                                <br>
                                <a class="text-white" href="tel:<?= HelperFunction::setting('hotline_2') ?>">
                                    <?= HelperFunction::setting('hotline_2') ?>
                                </a>
                            </strong>
                        </p>
                    </div><!-- /.heading -->
                    <div class="d-flex align-items-center mb-40">
                        <a href="#" class="btn btn__white btn__icon mr-30">
                            <span><?= \Yii::t('app', 'contact') ?></span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="#" class="btn btn__white btn__bordered btn__icon mr-30">
                            <span><?= \Yii::t('app', 'call_hotline') ?></span>
                            <i class="icon-phone"></i>
                        </a>
                    </div>
                </div>
                <div class="testimonials testimonials-wrapper">
                    <div class="slider-with-navs">
                        <!-- Testimonial #1 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                                chance to make an
                                impact, you’ve come to the right place. We will transform your business through our
                                techniques!
                            </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                                <p class="testimonial__meta-desc">Digital Media Manager</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the
                                chance to
                                make an impact, you’ve come to the right place. We will transform your business through
                                our
                                techniques! </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">John Peter</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                                chance to make an
                                impact, you’ve come to the right place. We will transform your business through our
                                techniques!
                            </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">Ayman</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the
                                chance to
                                make an impact, you’ve come to the right place. We will transform your business through
                                our
                                techniques! </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">John Peter</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white">My project was a simple & small task, but the
                                persistence and
                                determination turned it into an awesome and great project which make me happy .
                            </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">John Peter</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                    </div>
                    <div class="slider-nav">
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/1.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/2.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/3.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/2.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/3.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                    </div><!-- /.slcik-nav -->
                </div>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="contact-panel">
                    <?= $this->render('../parts/form-request', [
                        'model' => $contactForm
                    ]) ?>
                </div>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
