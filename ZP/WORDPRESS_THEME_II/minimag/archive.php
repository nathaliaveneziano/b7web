<?php get_header(); ?>

<main>
  <div class="container">
    <div class="row">
      <section class="col-lg-8">
        <header class="main-header-title">
          <h1><?php the_archive_title(); ?></h1>
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
          <div class="pagination_numbers">
            <?php
            global $wp_query;
            echo paginate_links(array(
              'current' => max(1, get_query_var('paged')),
              'total' => $wp_query->max_num_pages,
              'show_all' => true,
              'end_size' => 1,
              'mid_size' => 2,
              'prev_next' => false,
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