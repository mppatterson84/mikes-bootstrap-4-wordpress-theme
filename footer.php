 <footer class="margin-top-100">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <?php if ( has_nav_menu( 'footer-menu', 'top-menu' ) ) {
                        wp_nav_menu(
                            array(
                                'menu'            => 'footer-menu',
                                'theme_location'  => 'footer-menu',
                                'container'       => 'div',
                                'container_id'    => 'bs4navbarF',
                                'menu_id'         => 'footer-menu',
                                'menu_class'      => 'nav flex-column text-center mx-auto p-0',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 2,
                                'fallback_cb'     => 'bs4navwalker::fallback',
                                'walker'          => new bs4navwalkerF()
                            )
                        );
                    }?>
                    <?php get_sidebar( 'footer-left' ); ?>
                </div>
                <?php get_sidebar( 'footer-right' ); ?>
            </div>
        </div>
    </footer>

    

<!-- bottom of body -->

    <!-- scroll button -->
    <div class="scroll box-shadow animated fadeOutDown"><a href="#"><i class="fas fa-arrow-up"></i></a></div>

<?php wp_footer(); ?>
</body>

</html>