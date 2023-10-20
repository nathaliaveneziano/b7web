<?php get_header(); ?>

<main>
  <div class="container">
    <div class="row">
      <section class="col-sm-8">
        <header class="main-header-title">
          <h1><?php the_archive_title(); ?></h1>
          <p><?php the_archive_description(); ?></p>
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

<?php
get_footer();
