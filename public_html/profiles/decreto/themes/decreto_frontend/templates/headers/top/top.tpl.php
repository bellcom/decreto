<!-- Begin - top -->
<div class="header-top hidden-xs">
    <div class="container">
        <div class="row">


            <!-- Begin - left -->
            <div class="col-md-6 header-top-left">


                <!-- Begin - contact information -->
                <ul class="contact-information list-inline">

                    <!-- Begin - address -->
                    <li>
                        <span class="icon fa fa-map-marker"></span> <?php print theme_get_setting('address'); ?>, <?php print theme_get_setting('zipcode') . " " . theme_get_setting('city'); ?>
                    </li>
                    <!-- End - address -->

                    <!-- Begin - email -->
                    <li>
                        <a href="mailto:<?php print theme_get_setting('email'); ?>"><span class="icon fa fa-envelope"></span> <?php print theme_get_setting('email'); ?></a>
                    </li>
                    <!-- End - email -->

                    <!-- Begin - phone -->
                    <li>
                        <a href="tel:<?php print theme_get_setting('phone'); ?>"><span class="icon fa fa-phone"></span> <?php print theme_get_setting('phone_readable'); ?></a>
                    </li>
                    <!-- End - phone -->

                </ul>
                <!-- End - contact information -->


            </div>
            <!-- End - left -->


            <!-- Begin - right -->
            <div class="col-md-6 header-top-right text-right">


                <!-- Begin - social icons -->
                <ul class="social-icons social-icons-background-hover-color text-right">


                    <?php if( theme_get_setting('facebook') ): ?>
                    <!-- Begin - facebook -->
                    <li class="social-icon-facebook">
                        <a href="<?php print theme_get_setting('facebook_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php print theme_get_setting('facebook_tooltip_text'); ?>">
                            <i class="social-icon fa fa-facebook"></i>
                        </a>
                    </li>
                    <!-- End - facebook -->
                    <?php endif; ?>


                    <?php if( theme_get_setting('twitter') ): ?>
                    <!-- Begin - twitter -->
                    <li class="social-icon-twitter">
                        <a href="<?php print theme_get_setting('twitter_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php print theme_get_setting('twitter_tooltip_text'); ?>">
                            <i class="social-icon fa fa-twitter"></i>
                        </a>
                    </li>
                    <!-- End - twitter -->
                    <?php endif; ?>


                    <?php if( theme_get_setting('instagram') ): ?>
                    <!-- Begin - instagram -->
                    <li class="social-icon-instagram">
                        <a href="<?php print theme_get_setting('instagram_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php print theme_get_setting('instagram_tooltip_text'); ?>">
                            <i class="social-icon fa fa-instagram"></i>
                        </a>
                    </li>
                    <!-- End - instagram -->
                    <?php endif; ?>


                    <?php if( theme_get_setting('linkedin') ): ?>
                    <!-- Begin - linkedin -->
                    <li class="social-icon-linkedin">
                        <a href="<?php print theme_get_setting('linkedin_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php print theme_get_setting('linkedin_tooltip_text'); ?>">
                            <i class="social-icon fa fa-linkedin"></i>
                        </a>
                    </li>
                    <!-- End - linkedin -->
                    <?php endif; ?>


                    <?php if( theme_get_setting('pinterest') ): ?>
                    <!-- Begin - pinterest -->
                    <li class="social-icon-pinterest">
                        <a href="<?php print theme_get_setting('pinterest_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php print theme_get_setting('pinterest_tooltip_text'); ?>">
                            <i class="social-icon fa fa-pinterest"></i>
                        </a>
                    </li>
                    <!-- End - pinterest -->
                    <?php endif; ?>


                    <?php if( theme_get_setting('vimeo') ): ?>
                    <!-- Begin - vimeo -->
                    <li class="social-icon-vimeo">
                        <a href="<?php print theme_get_setting('vimeo_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php print theme_get_setting('vimeo_tooltip_text'); ?>">
                            <i class="social-icon fa fa-vimeo-square"></i>
                        </a>
                    </li>
                    <!-- End - vimeo -->
                    <?php endif; ?>


                    <?php if( theme_get_setting('youtube') ): ?>
                    <!-- Begin - youtube -->
                    <li class="social-icon-youtube">
                        <a href="<?php print theme_get_setting('youtube_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="<?php print theme_get_setting('youtube_tooltip_text'); ?>">
                            <i class="social-icon fa fa-youtube"></i>
                        </a>
                    </li>
                    <!-- End - youtube -->
                    <?php endif; ?>


                </ul>
                <!-- End - social icons -->


            </div>
            <!-- End - right -->


        </div>
    </div>
</div>
<!-- End - top -->