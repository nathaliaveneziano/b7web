<?php
get_header();
?>

<section class="site">
  <div class="container">
    <h1>Você pesquisou por: <?= get_search_query(); ?></h1>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php get_template_part('template-parts/post'); ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <div class="pagination">
      <div class="previous"><?php previous_posts_link(); ?></div>
      <div class="next"><?php next_posts_link(); ?></div>
    </div>
  </div>

  <?php get_sidebar(); ?>
</section>

<?php
get_footer();
