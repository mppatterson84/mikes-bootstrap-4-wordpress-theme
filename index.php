<?php get_header(); ?>
    <!-- the loop -->
    <div class="container theLoop margin-top-100">
        <div class="row">
            <div class="col">
                <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
                <h2>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p>There no posts to show</p>
                <?php endif; ?>
            </div>
            <?php get_sidebar( 'primary' ); ?>
        </div>
    </div>
    
<?php get_footer(); ?>