<?php if ( is_active_sidebar( 'primary-right' ) ) : ?>
    <div id="sidebar-primary-right" class="col-md-2 sidebar">
        <?php dynamic_sidebar( 'primary-right' ); ?>
    </div>
<?php else : ?>
    <!-- Time to add some widgets! -->
<?php endif; ?>