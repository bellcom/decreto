<?php
/**
 * @file
 * page--front.tpl.php
 */
?>

<!-- Begin - wrapper -->
<div id="wrapper">

    <?php include "header.tpl.php"; ?>

    <!-- Begin - content -->
    <div id="content">

        <?php include "_partials/banner.tpl.php"; ?>
        <?php include "_partials/buzz-boxes.tpl.php"; ?>
        <?php include "_partials/carousel.tpl.php"; ?>

        <div class="banner-background banner-background-1 background-parallax" data-stellar-background-ratio="0.5"></div>


        <!-- Begin - banner buy -->
        <div class="padding-y-xl">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h1>Køb din online dagsorden herunder</h1>
                        <h3 class="text-muted">Lorem ipsum dolor sit amet Gratis hvis du er eneste bruger consectetur adipisicing elit, sed do eiusmod 2-10 brugere samt frit antal tempor</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End - banner buy -->

        <?php include "_partials/price-table.tpl.php"; ?>
        <?php include "_partials/signup-form.tpl.php"; ?>

        <div class="banner-background banner-background-2 background-parallax" data-stellar-background-ratio="0.5"></div>

        <?php include "_partials/contact-information.tpl.php"; ?>

        <!-- <section class="container-fluid" id="parralax-banner-2" data-speed="6" data-type="background"></section> -->
        <!-- <section class="container-fluid" id="parralax-banner-3" data-speed="8" data-type="background"></section> -->

        <?php include "_partials/banner-support.tpl.php"; ?>

    </div>
    <!-- End - content -->

    <?php include "_partials/footer.tpl.php"; ?>

</div>
<!-- End - wrapper -->