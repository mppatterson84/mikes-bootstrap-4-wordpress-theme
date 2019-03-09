<?php if ( is_active_sidebar( 'footer1' ) ) : ?>
    <div id="sidebar-footer1" class="sidebar">
        <?php dynamic_sidebar( 'footer1' ); ?>
    </div>
<?php else : ?>
    <!-- Time to add some widgets! -->
<?php endif; ?>