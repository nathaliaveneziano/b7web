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

            <div class="pagination">
              <?php previous_post_link('%link', '<span class="prev">Previous Story</span>%title'); ?>
              <?php next_post_link('%link', '<span class="next">Next Story</span>%title'); ?>
            </div>
            <article class="post-item">
              <div class="post-info">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-data-comment"><?= get_the_date(); ?> | <?php comments_number(); ?></div>
                <div class="post-media">
                  <?php
                  if (has_post_thumbnail()) :
                    the_post_thumbnail('full', array('class' => 'post-thumbnail'));
                  else :
                    echo '<div class="no-post-thumbnail"></div>';
                  endif;
                  ?>
                </div>
                <div class="post-description"><?php the_content(); ?></div>
              </div>
            </article>

            <div class="comments-area">
              <? if (comments_open()) :
                comments_template();
              endif; ?>
            </div>
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