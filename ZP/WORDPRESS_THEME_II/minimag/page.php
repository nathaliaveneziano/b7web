<?php get_header(); ?>

<main>
  <div class="container">
    <div class="row">
      <section class="col-lg-8 single-page">
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
            <article class="post-item">
              <div class="post-info">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <?php
                if (has_post_thumbnail()) :
                  the_post_thumbnail('full', array('class' => 'post-thumbnail'));
                else :
                  echo '<div class="no-post-thumbnail"></div>';
                endif;
                ?>
                <div class="post-description"><?php the_content(); ?></div>
              </div>
            </article>
      </section>
  <?php
          endwhile;
        endif;
  ?>
  <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>