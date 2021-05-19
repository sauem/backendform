<?php
?>
<?php if (!empty($logos)) { ?>
    <div class="sponsors-section">
        <div class="auto-container">

            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <?php foreach ($logos as $logo) {
                        ?>
                        <li>
                            <div class="image-box">
                                <a href="<?= $logo->href ?>">
                                    <img src="<?= $logo->avatar ?>"
                                         alt="<?= $logo->name ?>"></a>
                            </div>
                        </li>
                        <?php
                    } ?>


                </ul>
            </div>

        </div>
    </div>
<?php } ?>
