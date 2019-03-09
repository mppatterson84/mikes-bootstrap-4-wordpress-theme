<?php if ( is_active_sidebar( 'footer2' ) ) : ?>
    <div id="sidebar-footer2" class="col sidebar">
        <?php dynamic_sidebar( 'footer2' ); ?>
    </div>
<?php else : ?>
    <!-- Time to add some widgets! -->
<?php endif; ?>