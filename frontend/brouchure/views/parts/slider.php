<?php

use common\helper\HelperFunction;

?>
<?php if (!empty($sliders)) { ?>
    <div class="banner_slider">
        <?php foreach ($sliders as $slider) { ?>
            <div class="slide">
                <div class="slide_img" style="background-image: url(<?= $slider->avatar?>);"></div>
                <div class="slide__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slide__content--headings d-flex">
                                    <div data-animation="fadeInLeft" class="padding_left3 ttm-bgcolor-skincolor"></div>
                                    <div class="padding_left30 padding_top10 padding_bottom10">
                                        <h2 data-animation="fadeInDown"><?= $slider->name?></h2>
                                        <p data-animation="fadeInDown" class="ttm-textcolor-darkgrey">
                                            <?= $slider->description?>
                                        </p>
                                        <div class="d-sm-flex margin_top30 align-items-center res-767-margin_top25"
                                             data-animation="fadeInUp" data-delay="1.4">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark margin_right15"
                                               href="<?= $slider->href?>">
                                                <?= Yii::t('app','detail')?>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>
