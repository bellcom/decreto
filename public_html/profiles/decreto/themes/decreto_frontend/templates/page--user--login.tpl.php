<?php
/**
 * @file
 * page--user--login.tpl.php
 */
?>

<!-- Begin - wrapper -->
<div class="user-form-wrapper">

    <!-- Begin - header -->
    <div class="user-form-header">

        <!-- Begin - container -->
        <div class="user-form-container">

            <!-- Begin - logo -->
            <a href="<?php print $front_page; ?>">
                <img src="<?php print $image_path . "user-forms/logo-2x.png"; ?>" data-toggle="tooltip" data-placement="bottom" title="Gå til startsiden" class="user-form-header-logo" alt=""/>
            </a>
            <!-- End - logo -->

        </div>
        <!-- End - container -->

    </div>
    <!-- End - header -->

    <!-- Begin - form -->
    <div class="user-form-form">

        <!-- Begin - container -->
        <div class="user-form-container">


            <!-- Begin - form -->
            <?php print drupal_render(drupal_get_form('user_login')); ?>
            <!-- End - form -->

            <!-- Begin - button -->
            <a href="/user/create" class="btn btn-default btn-block">Opret konto</a>
            <!-- End - button -->

            <!-- Begin - footer -->
            <div class="user-form-footer">

                <!-- Begin - forgot password -->
                <a href="/user/password">Glemt din adgangskode?</a>
                <!-- End - forgot password -->

                <!-- Begin - copyright text -->
                <p>Copyright &copy; 2014 - Decreto ApS</p>
                <!-- End - copyright text -->

            </div>
            <!-- End - footer -->

        </div>
        <!-- End - container -->

    </div>
    <!-- End - form -->

</div>
<!-- End - wrapper -->