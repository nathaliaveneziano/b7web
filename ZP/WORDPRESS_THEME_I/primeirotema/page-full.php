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

        <p><?php the_content(); ?></p>

        <?php if (comments_open()) : ?>

          <p>
            <?php comments_number(); ?>
          </p>

          <hr>
        <?php
          comments_template();
        endif;
        ?>
      </article>
    <?php endwhile; ?>
  </div>
</section>

<?php
get_footer();
