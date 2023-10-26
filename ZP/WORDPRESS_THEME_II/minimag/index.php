<?php get_header(); ?>

<main>
  <div class="container">
    <div class="row">
      <section class="col-lg-8">
        <div class="main">
          <?php if (have_posts()) : ?>
            <div class="post-content">
              <?php
              while (have_posts()) :
                the_post();
                get_template_part('template-parts/post');
              endwhile;
              ?>
            </div>
          <?php endif; ?>
          <div class="pagination_numbers">
            <div class="load-more-btn"><?= __('Load More', 'minimag'); ?></div>
          </div>
      </section>
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</main>

<?php get_footer(); ?>