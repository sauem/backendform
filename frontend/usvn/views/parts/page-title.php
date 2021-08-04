<?php

use common\helper\HelperFunction;

?>
<section class="page-title archive page-title-layout10 bg-overlay bg-overlay-gradient bg-parallax">
    <div class="bg-img"><img src="<?= $banner ?? '' ?>" alt="background"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <h1 class="pagetitle__heading"><?= $title ?? '' ?></h1>
                <p class="pagetitle__desc">
                    <?= $description ?? '' ?>
                </p>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->

        <?php if (isset($tabs) && !empty($tabs)) { ?>

            <nav class="nav about-tab nav-tabs justify-content-center">
                <?php foreach ($tabs as $tab) { ?>
                    <a href="<?= HelperFunction::Link($tab_type ?? PRODUCT, $tab->slug) ?>"
                       class="nav__link <?= $activeSlug == $tab->slug ? 'active' : '' ?>">
                        <?= $tab->name ?>
                    </a>
                <?php } ?>

            </nav>
        <?php } ?>
    </div><!-- /.container -->
</section><!-- /.page-title -->
