<?php if ( is_active_sidebar( 'primary' ) ) : ?>
    <div id="sidebar-primary" class="col-md-3 sidebar">
        <?php dynamic_sidebar( 'primary' ); ?>
    </div>
<?php else : ?>
    <!-- Time to add some widgets! -->
<?php endif; ?>