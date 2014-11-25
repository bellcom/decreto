<?php
/**
 * @file
 * page.tpl.php
 */
?>
<!-- Begin - wrapper -->
<div id="wrapper">

    <!-- Begin - sidebar left -->
    <div class="sidebar sidebar-left">
        <ul>

            <!-- Begin - logo -->
            <li class="sidebar-logo">
                <a href="#" data-scroll-to="#banner">
                    <?php if (isset($company_name)) : ?>
                        <?php if (strlen($company_name) <= 10) : ?>
                            <h2><?php print $company_name; ?></h2>
                        <?php elseif (strlen($company_name) > 10 && strlen($company_name) <= 20) : ?>
                            <h3><?php print $company_name; ?></h3>
                        <?php else : ?>
                            <h4><?php print $company_name; ?></h4>
                        <?php endif; ?>
                    <?php else : ?>
                        <span class="sidebar-logo-image"></span><!-- Decreto logo -->
                    <?php endif; ?>
                </a>
            </li>
            <!-- End - logo -->

            <!-- Begin - organisation -->
            <li class="sidebar-nav-dropdown">
                <a href="#">
                    <span class="icon fa fa-building"></span>
                    <?php if (isset($company_name)) : ?>
                        <?php print $company_name; ?>
                    <?php endif; ?>
                </a>
                <ul class="sidebar-nav-dropdown-menu">
                    <li class="sidebar-nav-link"><a href="/meetings"><span class="icon fa fa-folder-open"></span>Møder</a></li>
                    <li class="sidebar-nav-link"><a href="/calendar"><span class="icon fa fa-calendar"></span>Kalender</a></li>
                </ul>
            </li>
            <!-- End - organisation -->

            <!-- Begin - contacts -->
            <li class="sidebar-nav-dropdown">
                <a href="#">
                    <span class="icon fa fa-book"></span>
                    Kontakter
                </a>
                <ul class="sidebar-nav-dropdown-menu">
                    <li class="sidebar-nav-link"><a href="/contacts/members"><span class="icon fa fa-users"></span>Medlemmer</a></li>
                </ul>
            </li>
            <!-- End - contacts -->

            <!-- Begin - administration -->
            <li class="sidebar-nav-dropdown">
                <a href="#">
                    <span class="icon fa fa-tachometer"></span>
                    Administration
                </a>
                <ul class="sidebar-nav-dropdown-menu">
                    <li class="sidebar-nav-link"><a href="/user"><span class="icon fa fa-user"></span>Min bruger</a></li>
                    <li class="sidebar-nav-link"><a href="/organisation"><span class="icon fa fa-suitcase"></span>Virksomhed</a></li>
                    <li class="sidebar-nav-link"><a href="/organisation/users"><span class="icon fa fa-users"></span>Medlemmer</a></li>
                </ul>
            </li>
            <!-- End - administration -->

        </ul>
    </div>
    <!-- End - sidebar left -->

    <!-- Begin - sidebar right -->
    <div class="sidebar sidebar-right"></div>
    <!-- End - sidebar right -->

    <!-- Begin - sidebar header -->
    <header class="header header-sidebar header-sticky">

        <!-- Begin - navbar -->
        <section class="header-navbar">
            <div class="container">
                <div class="row">

                    <!-- Begin - content -->
                    <div class="col-xs-4 header-navbar-content">

                        <!-- Begin - navigation -->
                        <ul class="header-nav">

                            <!-- Begin - sidebar toggle -->
                            <li class="header-nav-button"><a class="btn btn-faceless btn-sidebar-toggle" href="#" data-toggle-sidebar="left"><span class="icon fa fa-bars"></span></a></li>
                            <!-- End - sidebar toggle -->

                        </ul>
                        <!-- End - navigation -->

                    </div>
                    <!-- End - content -->

                    <!-- Begin - content -->
                    <div class="col-xs-4 text-center header-navbar-content">

                        <!-- Begin - logo -->
                        <a class="header-logo" href="#" data-scroll-to="#banner" data-toggle="tooltip" data-placement="bottom" title="Gå til toppen af siden"></a>
                        <!-- End - logo -->

                    </div>
                    <!-- End - content -->

                </div>
            </div>
        </section>
        <!-- End - navbar -->

    </header>
    <!-- End - sidebar header -->

    <!-- Begin - content -->
    <div id="content">
        <div class="container">

            <a id="main-content"></a>

            <?php print render($title_prefix); ?>
            <?php if (!empty($title)): ?>
                <h1 class="page-header"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>

        </div>
    </div>
    <!-- End - content -->

</div>
<!-- End - wrapper -->