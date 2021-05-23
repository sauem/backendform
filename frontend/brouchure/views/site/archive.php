<?php
$this->title = $model->name ? $model->name : 'Archive';

use yii\widgets\ListView;

Yii::$app->params['header_style'] = true;

?>


<?= $this->render('../parts/page-title', [
    'title' => $model->name,
    'description' => ''
]) ?>
<section class="ttm-row grid-section ttm-bgcolor-grey clearfix">
    <div class="container">

        <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="/images/blog/blog-01-1200x800.jpg" alt="">
                    </div>
                    <div class="featured-content">
                        <div class="post-header">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                            <span class="ttm-entry-date">
                                                <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span class="entry-month entry-year">APR</span></time>
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
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-color-darkgrey btn-inline" href="blog-single.html">Read More</a>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="/images/blog/blog-02-1200x800.jpg" alt="">
                    </div>
                    <div class="featured-content">
                        <div class="post-header">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                            <span class="ttm-entry-date">
                                                <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span class="entry-month entry-year">APR</span></time>
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
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-color-darkgrey btn-inline" href="blog-single.html">Read More</a>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="/images/blog/blog-03-1200x800.jpg" alt="">
                    </div>
                    <div class="featured-content">
                        <div class="post-header">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                            <span class="ttm-entry-date">
                                                <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span class="entry-month entry-year">APR</span></time>
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
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-color-darkgrey btn-inline" href="blog-single.html">Read More</a>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
        </div>
    </div>
</section>
