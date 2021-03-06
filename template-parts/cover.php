    <div class="jumbotron jumbotron-fluid jumbotron-image">
        <div class="container text-center headline">
            <h1 class="display-4"><?php echo get_theme_mod('jumbotron_heading', 'Bootstrap 4'); ?></h1>
            <br>
            <hr class="my-3">
            <br>
            <p class="lead"><?php echo get_theme_mod('jumbotron_text', 'Wordpress and Bootstrap 4 theme with a front page jumbotron cover.'); ?></p>
            <br>
            <p class="lead">
            <?php if( get_theme_mod( 'jumbotron_btn_display', 'show' ) == 'show' ) : ?>
                <a class="btn btn-primary btn-lg animated pulse slower infinite box-shadow" href="<?php echo get_theme_mod('btn_url', 'about'); ?>" role="button"><?php echo get_theme_mod('btn_text', 'Find Out More'); ?></a>
            <?php endif ?>
            </p>
        </div>        
    </div>