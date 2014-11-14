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

    <!-- Begin - form wrapper -->
    <div class="user-form-wrapper">

        <!-- Begin - container -->
        <div class="user-form-container">

            <!-- Begin - form -->
            <div class="user-form-form">

                <!-- Begin - form -->
                <?php print drupal_render(drupal_get_form('user_pass')); ?>
                <!-- End - form -->

                <!-- Begin - button -->
                <a href="/#signup" class="btn btn-default btn-block">
                    Opret konto
                    <span class="icon fa fa-edit"></span>
                </a>
                <!-- End - button -->

            </div>
            <!-- End - form -->

            <!-- Begin - footer -->
            <div class="user-form-footer">

                <!-- Begin - sign in -->
                <a href="/user/login">Vil du logge ind?</a>
                <!-- End - sign in -->

                <!-- Begin - copyright text -->
                <p>Copyright &copy; 2014 - Decreto ApS</p>
                <!-- End - copyright text -->

            </div>
            <!-- End - footer -->

        </div>
        <!-- End - container -->

    </div>
    <!-- End - form wrapper -->

</div>
<!-- End - wrapper -->