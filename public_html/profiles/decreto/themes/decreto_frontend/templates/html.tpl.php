<?php
/**
 * @file
 * html.tpl.php
 */
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7 no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>><![endif]-->
<!--[if lte IE 8]><html class="ie8 no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?> xmlns="http://www.w3.org/1999/html"><!--<![endif]-->
<head>

    <title><?php print $head_title; ?></title>
    <meta http-equiv="content-language" content="da,en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <?php print $head; ?>

    <!-- Begin - external stylesheet -->

		<!-- Load webfonts from CDNs -->
        <link href="http://fonts.googleapis.com/css?family=Asap:400,700|Open+Sans:200,300,400,500,600,700" rel="stylesheet" type="text/css">

    <!-- End - external stylesheet -->

    <!-- Begin - internal stylesheet -->
    <link href="<?php print $stylesheet_path . "stylesheet.css"; ?>" rel="stylesheet" type="text/css">

    <?php print $styles; ?>
    <!-- End - internal stylesheet -->

    <!-- Begin - internal javascript files -->

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <script src="<?php print $vendor_path . "mandatory/modernizr.min.js"; ?>"></script>
    <!-- End - internal javascript files -->

    <!-- Begin - icons -->
    <link rel="shortcut icon" href="<?php print $image_path . "icon/favicon.ico"; ?>">

    <link rel="apple-touch-icon" href="<?php print $image_path . "icon/icon-phone.png"; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php print $image_path . "icon/icon-ipad.png"; ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php print $image_path . "icon/icon-phone-retina.png"; ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php print $image_path . "icon/icon-ipad-retina.png"; ?>">
    <!-- End - icons -->

</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <!-- Begin - skip link -->
    <div id="skip-link">
        <a href="#content" class="element-invisible element-focusable">
            <?php print t('Skip to main content'); ?>
        </a>
    </div>
    <!-- End - skip link -->

    <?php print $page_top; ?>
    <?php print $page; ?>

    <!-- Begin - load javascript files -->
    <?php print $scripts; ?>
    <!-- End - load javascript files -->

    <?php print $page_bottom; ?>

</body>
</html>