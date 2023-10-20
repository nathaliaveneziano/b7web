<?php
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die('Please do not load this page directly. Thanks!');

if (post_password_required()) { ?>
  <p class="nocomments">Este artigo está protegido por password. Insira-a para ver os comentários.</p>
<?php
  return;
}
?>

<div id="comments">
  <h3><?php comments_number('0 comment', '1 comment', '%  comments'); ?>: Leave Your Comments</h3>

  <?php
  if (have_comments()) :
    wp_list_comments(array(
      'style'             => 'div',
      'type'              => 'comment',
      'avatar_size'       => 60,
      'reverse_top_level' => true,
      'format'            => 'html5',
      'per_page'          => 3,
    ));


    paginate_comments_links(array(
      'screen_reader_text' => __('Pagination', 'text_domain'),
      'prev_text' => __('Previous', 'text_domain'),
      'next_text' => __('Next', 'text_domain'),
    ));
  endif;

  if (comments_open()) :
    comment_form(array(
      'fields'    => array(
        'author'  => '<label>Nome: <input type="text" name="author" placeholder="Digite seu nome"></label>',
        'email'   => '<label>E-mail: <input type="email" name="email" placeholder="Digite seu e-mail"></label>',
        'url'     => '<label>URL: <input type="url" name="url" placeholder="Digite seu site"></label>',
      ),
      'comment_field'   => '<label>Comentário: <textarea name="comment"></textarea></label>',
      'class_submit'    => 'button',
      'title_reply_to'  => __('Leave a Reply to %s', 'minimag'),
      'label_submit'    => __('Post a comment', 'minimag'),
      'format'          => 'html5',      
    ));
  else :
  ?>
    <h3>Os comentários estão fechados.</h3>
  <?php endif; ?>
</div>