<?php
get_header();
?>

<section class="site">
  <div class="container">
    <?php get_search_form(); ?>
    ...
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <article class="single">
          <h2><?php the_title(); ?></h2>

          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
          <?php endif; ?>

          <p>
            <?= get_the_date(); ?> |
            <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
            <?php the_category(', '); ?>
          </p>

          <p><?php the_content(); ?></p>

          <p>
            <?php comments_number(); ?>
          </p>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

    <div class="pagination">
      <div class="previous"><?php previous_post_link(); ?></div>
      <div class="next"><?php next_post_link(); ?></div>
    </div>
  </div>

  <?php get_sidebar(); ?>
</section>

<?php
get_footer();
