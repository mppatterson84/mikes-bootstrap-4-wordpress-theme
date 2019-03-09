<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
    <div id="sidebar-footer-left" class="sidebar">
        <?php dynamic_sidebar( 'footer-left' ); ?>
    </div>
<?php else : ?>
    <!-- Time to add some widgets! -->
<?php endif; ?>