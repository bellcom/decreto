<!-- Begin - social icons -->
<ul class="social-icons social-icons-background-hover-color social-icons-circle">


    <?php if( theme_get_setting('facebook') ): ?>
    <!-- Begin - facebook -->
    <li class="social-icon-facebook">
        <a href="<?php print theme_get_setting('facebook_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php print theme_get_setting('facebook_tooltip_text'); ?>">
            <i class="social-icon fa fa-facebook"></i>
        </a>
    </li>
    <!-- End - facebook -->
    <?php endif; ?>


    <?php if( theme_get_setting('twitter') ): ?>
    <!-- Begin - twitter -->
    <li class="social-icon-twitter">
        <a href="<?php print theme_get_setting('twitter_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php print theme_get_setting('twitter_tooltip_text'); ?>">
            <i class="social-icon fa fa-twitter"></i>
        </a>
    </li>
    <!-- End - twitter -->
    <?php endif; ?>


    <?php if( theme_get_setting('instagram') ): ?>
    <!-- Begin - instagram -->
    <li class="social-icon-instagram">
        <a href="<?php print theme_get_setting('instagram_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php print theme_get_setting('instagram_tooltip_text'); ?>">
            <i class="social-icon fa fa-instagram"></i>
        </a>
    </li>
    <!-- End - instagram -->
    <?php endif; ?>


    <?php if( theme_get_setting('linkedin') ): ?>
    <!-- Begin - linkedin -->
    <li class="social-icon-linkedin">
        <a href="<?php print theme_get_setting('linkedin_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php print theme_get_setting('linkedin_tooltip_text'); ?>">
            <i class="social-icon fa fa-linkedin"></i>
        </a>
    </li>
    <!-- End - linkedin -->
    <?php endif; ?>


    <?php if( theme_get_setting('pinterest') ): ?>
    <!-- Begin - pinterest -->
    <li class="social-icon-pinterest">
        <a href="<?php print theme_get_setting('pinterest_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php print theme_get_setting('pinterest_tooltip_text'); ?>">
            <i class="social-icon fa fa-pinterest"></i>
        </a>
    </li>
    <!-- End - pinterest -->
    <?php endif; ?>


    <?php if( theme_get_setting('vimeo') ): ?>
    <!-- Begin - vimeo -->
    <li class="social-icon-vimeo">
        <a href="<?php print theme_get_setting('vimeo_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php print theme_get_setting('vimeo_tooltip_text'); ?>">
            <i class="social-icon fa fa-vimeo-square"></i>
        </a>
    </li>
    <!-- End - vimeo -->
    <?php endif; ?>


    <?php if( theme_get_setting('youtube') ): ?>
    <!-- Begin - youtube -->
    <li class="social-icon-youtube">
        <a href="<?php print theme_get_setting('youtube_uri'); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php print theme_get_setting('youtube_tooltip_text'); ?>">
            <i class="social-icon fa fa-youtube"></i>
        </a>
    </li>
    <!-- End - youtube -->
    <?php endif; ?>


</ul>
<!-- End - social icons -->