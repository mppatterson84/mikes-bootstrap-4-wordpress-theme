<?php get_header(); ?>

<?php if( get_theme_mod( 'jumbotron_display', 'show' ) == 'show' ) : ?>
    <?php get_template_part( 'template-parts/cover' ); ?>
<?php endif ?>

    <!-- the loop -->
    <div class="container theLoop margin-top-100">
    <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
        <!-- <h2>
            <a href="< ?php the_permalink() ?>">
                < ?php the_title(); ?>
            </a>
        </h2> -->
        <?php the_content(); ?>
    <?php endwhile; else: ?>
        <p>There no posts to show</p>
    <?php endif; ?>
    </div>
    
<?php get_footer(); ?>