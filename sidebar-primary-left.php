<?php if ( is_active_sidebar( 'primary-left' ) ) : ?>
    <div id="sidebar-primary-left" class="col-md-2 sidebar">
        <?php dynamic_sidebar( 'primary-left' ); ?>
    </div>
<?php else : ?>
    <!-- Time to add some widgets! -->
<?php endif; ?>