<!-- Begin - footer -->
<footer class="footer hidden-print">


    <!-- Begin - copyright text -->
    <section class="footer-copyright-text text-center">

        &copy;

        <?php if( theme_get_setting( 'copyright_year' ) && theme_get_setting( 'copyright_year' ) < date( 'Y' ) ): ?>

            <?php print theme_get_setting( 'copyright_year' ) . '-' . date( 'Y' ); ?>

        <?php else: ?>

            <?php print date( 'Y' ); ?>

        <?php endif; ?>

        <?php print theme_get_setting( 'owner_name' ); ?>

    </section>
    <!-- End - copyright text -->


</footer>
<!-- End - footer -->