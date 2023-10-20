<?php
if (post_password_required()) {
  return;
}

if (have_comments()) :
  foreach ($comments as $comment) :
?>

    <div class="comments">
      <div class="comment-avatar">
        <?= get_avatar($comment, 60); ?>
      </div>
      <div class="comment-area">
        <p>
          <strong><?php comment_author(); ?></strong> - <?php comment_date(); ?>
        </p>

        <p>
          <?php comment_text(); ?>
        </p>
      </div>
    </div>

<?php
  endforeach;

  the_comments_pagination();
endif;

comment_form(array(
  'fields' => array(
    'author' => '<label>Nome: <input type="text" name="author" placeholder="Digite seu nome"></label>',
    'email' => '<label>E-mail: <input type="email" name="email" placeholder="Digite seu e-mail"></label>',
    'url' => '<label>URL: <input type="url" name="url" placeholder="Digite seu site"></label>',
  ),
  'comment_field' => '<label>Comentário: <textarea name="comment"></textarea></label>',
  'class_submit' => 'button',
  'label_submit' => 'Envie seu comentário',
  // 'title_replay' => 'Deixe um comentário',
));
?>
