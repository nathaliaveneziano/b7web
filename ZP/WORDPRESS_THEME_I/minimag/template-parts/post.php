<article class="post-item">
  <a href="<?php the_permalink(); ?>">
    <div class="post-comment-area">
      <span><?php comments_number('0', '1', '%'); ?></span>
    </div>
    <div class="post-info">
      <?php
      if (has_post_thumbnail()) :
        the_post_thumbnail('large', array('class' => 'post-thumbnail'));
      else :
        echo '<div class="no-post-thumbnail"></div>';
      endif;
      ?>
      <div class="post-data"><?= get_the_date(); ?></div>
      <h2 class="post-title"><?php the_title(); ?></h2>
      <div class="post-description"><?php the_excerpt(); ?></div>
    </div>
  </a>
</article>
