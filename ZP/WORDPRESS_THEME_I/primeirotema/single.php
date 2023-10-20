<?php
get_header();
?>

<section class="site">
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <article class="post">
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

          <?php if (comments_open()) : ?>
            <p>
              <?php comments_number(); ?>
            </p>
          <?php endif; ?>

          <hr>

          <h2>Posts Relacionados</h2>
          <section class="related-posts">
            <?php
            $categories = get_the_category();

            $nv_query = new WP_Query(array(
              'posts_per_page' => 3,
              'post__not_in' => array($post->ID),
              'cat' => $categories[0]->term_id,
            ));

            if ($nv_query->have_posts()) {
              while ($nv_query->have_posts()) {
                $nv_query->the_post();
                get_template_part('template-parts/related-post');
              }

              wp_reset_postdata();
            }
            ?>
          </section>
          <hr>

          <?php
          if (comments_open()) {
            comments_template();
          }
          ?>
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
