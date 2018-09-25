
</div> <!--site-container-->
<footer>
  <nav class="site-nav">
    <?php
    $args = array(
      'theme_location' => 'primary'
    );
    ?>

    <?php wp_nav_menu( $args ); ?>
  </nav>
  <p><?php bloginfo('name');?> &copy <?php echo date('Y'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</hmtl>
