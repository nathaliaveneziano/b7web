<div class="post-preview">
  <a href="<?php the_permalink(); ?>">
    <h2 class="post-title"><?php the_title(); ?></h2>
  </a>
  <p class="post-meta">Postado por
    <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
      <?php the_author(); ?>
    </a>
    em <?= get_the_date(); ?>
  </p>
</div>
<hr>
