<?php get_header(); ?>

<main>
  <div class="container">
    <div class="row">
      <section class="col-lg-8">
        <header class="main-header-title">
          <h1><?= __('Search: ', 'minimag'); ?><span><?= get_search_query(); ?></span></h1>
        </header>
        <div class="main">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
              get_template_part('template-parts/post');
            endwhile;
          endif;
          ?>
          <div class="pagination">
            <div class="previous"><?php previous_posts_link(); ?></div>
            <div class="next"><?php next_posts_link(); ?></div>
          </div>
      </section>
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</main>

<?php get_footer(); ?>