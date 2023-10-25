<article <?php post_class('post-item'); ?>>
  <a href="<?php the_permalink(); ?>">
    <div class="post-comment-area">
      <span><?php comments_number('0', '1', '%'); ?></span>
    </div>
    <div class="post-info">
      <div class="post-media">
        <?php
        if (get_post_format() === 'video') {
          $content = apply_filters('the_content', get_the_content());
          $video = get_media_embedded_in_content($content, array(
            'iframe',
            'embed',
            'object',
            'video',
          ));

          if ($video) {
            echo $video[0];
          }
        } elseif (get_post_format() === 'audio') {
          $content = apply_filters('the_content', get_the_content());
          $audio = get_media_embedded_in_content($content, array(
            'iframe',
            'audio',
          ));

          if ($audio) {
            echo $audio[0];
          }
        } elseif (has_post_thumbnail()) {
          the_post_thumbnail('large', array('class' => 'post-thumbnail'));
        } else {
          echo '<div class="no-post-thumbnail"></div>';
        }
        ?>
      </div>
      <div class="post-data"><?= get_the_date(); ?></div>
      <h2 class="post-title"><?php the_title(); ?></h2>
      <div class="post-description"><?php the_excerpt(); ?></div>
    </div>
  </a>
</article>