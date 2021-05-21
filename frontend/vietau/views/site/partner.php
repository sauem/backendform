<?php
Yii::$app->params['header_style'] = true;
?>
<?= $this->render('../parts/page-title', [
    'title' => Yii::t('app', 'partners'),
    'description' => ''
]) ?>
<div class="experts-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title">
            <div class="clearfix">
                <div class="pull-left">
                    <h2><?= Yii::t('app', 'partners') ?></span></h2>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <?php if (!empty($members)) {
                foreach ($members as $member) {
                    ?>
                    <div class="team-block col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="#"><img src="<?= $member->avatar ?>" alt=""/></a>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a target="_blank" href="<?= $member->twitter ?>" class="icofont-twitter"></a>
                                    </li>
                                    <li><a target="_blank" href="<?= $member->facebook ?>" class="icofont-facebook"></a>
                                    </li>
                                    <li><a target="_blank" href="<?= $member->linkedin ?>" class="icofont-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lower-box mt-0">
                                <h4><a href="#"><?= $member->name ?></a></h4>
                                <div class="designation"><?= $member->description ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } ?>
        </div>
    </div>
</div>
