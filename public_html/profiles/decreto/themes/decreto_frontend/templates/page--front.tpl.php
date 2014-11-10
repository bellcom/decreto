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

        <div class="banner-background banner-background-1 parallax-background" data-stellar-background-ratio="0.5"></div>

        <?php include "_partials/price-table.tpl.php"; ?>

        <div class="banner-background banner-background-2 parallax-background" data-stellar-background-ratio="0.5"></div>

        <?php include "_partials/contact-information.tpl.php"; ?>
        <?php include "_partials/signup-form.tpl.php"; ?>

        <!-- <section class="container-fluid" id="parralax-banner-2" data-speed="6" data-type="background"></section> -->
        <!-- <section class="container-fluid" id="parralax-banner-3" data-speed="8" data-type="background"></section> -->

        <?php include "_partials/banner-support.tpl.php"; ?>

    </div>
    <!-- End - content -->

</div>
<!-- End - wrapper -->

<?php include "_partials/footer.tpl.php"; ?>