<?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
    <div id="sidebar-footer-right" class="col-md-6 sidebar">
        <?php dynamic_sidebar( 'footer-right' ); ?>
    </div>
<?php else : ?>
    <!-- Time to add some widgets! -->
<?php endif; ?>