<?php

/**
 * Template Name: Modelo full
 */
?>

<?php
get_header();
?>

<section class="site">
  <div class="container full">
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <article class="post">
        <h2><?php the_title(); ?></h2>

        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full'); ?>
        <?php endif; ?>

        <?php if (comments_open()) : ?>
          <p>
            <?php comments_number(); ?>
          </p>
        <?php endif; ?>

        <hr>

        <?php
        if (comments_open()) {
          comments_template();
        }
        ?>
      </article>
    <?php endwhile; ?>
  </div>
</section>

<?php
get_footer();
