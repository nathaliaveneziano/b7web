<article class="post">
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('full', array(
        'class' => 'post-thumbnail',
      )); ?>
    </a>
  <?php endif; ?>

  <div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <p>
      <?= get_the_date(); ?> |
      <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
      <?php the_category(', '); ?>
    </p>

    <p><?php the_excerpt(); ?></p>

    <p>
      <?php comments_number(); ?> |
      <a href="<?php the_permalink(); ?>">Leia Mais</a>
    </p>
  </div>
</article>
