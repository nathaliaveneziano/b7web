<article class="related-item">
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium', array(
        'class' => 'post-thumbnail',
      )); ?>
    </a>
  <?php endif; ?>

  <div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p>
      <a href="<?php the_permalink(); ?>">Leia Mais</a>
    </p>
  </div>
</article>
