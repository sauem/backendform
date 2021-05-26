<?php

use common\helper\HelperFunction;

?>
<?php
if (!empty($sliders)) {
    ?>
    <section id="hero-8" class="hero-section division">
        <div class="slideshow mt-80">
            <div class="slideshow-inner">
                <div class="slides">
                    <?php foreach ($sliders as $slider) { ?>
                        <div class="slide is-active">
                            <div class="slide-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-10 offset-lg-1">
                                            <div class="caption white-color">
                                                <div class="title"><h3><?= $slider->name ?></h3></div>
                                                <div class="text">
                                                    <p><?= $slider->description ?></p>
                                                    <a href="<?= $slider->href ?>"
                                                       class="btn btn-md btn-color-02 tra-white-hover"> <?= Yii::t('app', 'read_more') ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-container">
                                <img class="img-fluid" src="<?= $slider->avatar ?>" alt="<?= $slider->name ?>">
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="arrows ico-45 white-color">
                    <div class="arrow prev"><span class="flaticon-back"> </span></div>
                    <div class="arrow next"><span class="flaticon-next"> </span></div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

