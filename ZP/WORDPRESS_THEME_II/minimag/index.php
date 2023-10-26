<?php get_header(); ?>

<main>
  <div class="container">
    <div class="row">
      <section class="col-lg-8">
        <div class="main">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
              get_template_part('template-parts/post');
            endwhile;
          endif;
          ?>
          <!-- <div class="pagination">
            <div class="previous"><?php previous_posts_link(); ?></div>
            <div class="next"><?php next_posts_link(); ?></div>
          </div> -->
          <div class="pagination_numbers">
            <?php
            global $wp_query;
            echo paginate_links(array(
              'current' => max(1, get_query_var('paged')),
              'total' => $wp_query->max_num_pages,
              'show_all' => true,
              // 'show_all' => false,
              'end_size' => 1,
              'mid_size' => 2,
              'prev_next' => false,
              // 'prev_text' => '<',
              // 'next_text' => '>',
              // 'before_page_number' => '[',
              // 'after_page_number' => ']',
            ));
            ?>
          </div>
      </section>
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</main>

<?php get_footer(); ?>