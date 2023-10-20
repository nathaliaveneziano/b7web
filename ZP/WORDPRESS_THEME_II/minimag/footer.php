<footer>
  <div class="footer-widgets">
    <?php
    if (is_active_sidebar('nv_sidebar_footer')) {
      dynamic_sidebar('nv_sidebar_footer');
    }
    ?>
  </div>
  <div class="footer-credits">
    <span>All Rights Reserved
      <?php if (get_theme_mod('nv_privacy_url')) : ?>
        - <a href="<?php the_permalink(get_theme_mod('nv_privacy_url')); ?>">Privacy Policy</a>
      <?php endif; ?>
    </span>
    <span>Created by XYZ</span>
    <button class="back-to-top">
      <img src="<?= get_template_directory_uri() . '/assets/images/arrow.svg'; ?>" alt="Scroll">
    </button>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>