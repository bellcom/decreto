<!-- Begin - navigation bar -->
<nav class="header-navigation-bar" data-40="height: 90px; line-height: 90px; " data-150="height: 75px; line-height: 75px;">
    <div class="container">
        <div class="row">


            <!-- Begin - left -->
            <div class="col-md-4 navigation-bar-content align-content-right">

                <!-- Begin - navigation -->
                <ul class="header-navigation">

                    <?php
                        if(module_exists('tb_megamenu')) {
                            print theme('tb_megamenu', array('menu_name' => 'main-menu'));
                        }
                        else {
                            $main_menu_tree = module_exists('i18n_menu') ? i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu')) : menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                            print drupal_render($main_menu_tree);
                        }
                    ?>

                </ul>
                <!-- End - navigation -->

            </div>
            <!-- End - left -->


            <!-- Begin - centered -->
            <div class="col-md-4 navigation-bar-content align-content-center">

                <!-- Begin - logo -->
                <div class="header-logo">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Gå til startsiden"></a>
                </div>
                <!-- End - logo -->

            </div>
            <!-- End - centered -->


            <!-- Begin - right -->
            <div class="col-md-4 navigation-bar-content align-content-left">

                <!-- Begin - navigation -->
                <ul class="header-navigation">

                    <?php
                        if(module_exists('tb_megamenu')) {
                            print theme('tb_megamenu', array('menu_name' => 'user-menu'));
                        }
                        else {
                            $user_menu_tree = module_exists('i18n_menu') ? i18n_menu_translated_tree(variable_get('menu_user_links_source', 'user-menu')) : menu_tree(variable_get('menu_user_links_source', 'user-menu'));
                            print drupal_render($user_menu_tree);
                        }
                    ?>

                </ul>
                <!-- End - navigation -->

            </div>
            <!-- End - right -->


        </div>
    </div>
</nav>
<!-- End - navigation bar -->