<?php
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die(__('Please do not load this page directly. Thanks!', 'minimag'));

if (post_password_required()) { ?>
  <p class="nocomments"><?= __('This article is password protected. Enter it to see comments.', 'minimag'); ?></p>
<?php
  return;
}
?>

<div id="comments">
  <h3>
    <?php comments_number(
      __('0 comment', 'minimag'),
      __('1 comment', 'minimag'),
      __('%  comments', 'minimag')
    ); ?>
    : <?= __('Leave Your Comments', 'minimag'); ?></h3>

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
        'author'  => '<label>' . __('Name', 'minimag') . ': <input type="text" name="author" placeholder="Digite seu nome"></label>',
        'email'   => '<label>E-mail: <input type="email" name="email" placeholder="Digite seu e-mail"></label>',
        'url'     => '<label>URL: <input type="url" name="url" placeholder="Digite seu site"></label>',
      ),
      'comment_field'   => '<label>' . __('Comment', 'minimag') . ': <textarea name="comment"></textarea></label>',
      'class_submit'    => 'button',
      'title_reply_to'  => __('Leave a Reply to %s', 'minimag'),
      'label_submit'    => __('Post a comment', 'minimag'),
      'format'          => 'html5',
    ));
  else :
  ?>
    <h3><?= __('Comments are closed.', 'minimag'); ?></h3>
  <?php endif; ?>
</div>