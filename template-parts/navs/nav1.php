
    <nav id="mainNavbar" class="navbar navbar-expand-md fixed-top navbar-light">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if( get_theme_mod( 'navbar_brand_display', 'show' ) == 'show' ) : ?>
                <?php bloginfo('name'); ?>
            <?php endif ?>
        </a>
        <?php if( get_theme_mod( 'navbar_tagline_display', 'show' ) == 'show' ) : ?>
            <div><?php bloginfo( 'description' ); ?></div>
        <?php endif ?>
        <button class="navbar-toggler hamburger hamburger--slider animated rubberBand box-shadow" type="button"
            data-toggle="collapse" data-target="#bs4navbar"
            aria-controls="bs4navbar" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <?php
            wp_nav_menu(
                array(
                    'menu'            => 'top-menu',
                    'theme_location'  => 'top-menu',
                    'container'       => 'div',
                    'container_id'    => 'bs4navbar',
                    'container_class' => 'collapse navbar-collapse top-nav',
                    'menu_id'         => 'primary-menu',
                    'menu_class'      => 'navbar-nav ml-auto text-center',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                )
            );
        ?>

    </nav>