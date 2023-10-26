jQuery(function () {
  jQuery('.back-to-top').on('click', function () {
    jQuery('html, body').animate({ scrollTop: 0 }, 800);
    return false;
  });

  jQuery('.load-more-btn').on('click', function () {
    jQuery(this).hide();
    const offset = jQuery('.post-content article').length;

    jQuery.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      data: { action: 'LoadMorePosts', offset: offset },
      success: function (html) {
        jQuery('.load-more-btn').show();

        if (html != '') {
          jQuery('.post-content').append(html);
        } else {
          jQuery('.load-more-btn').hide();
        }
      },
    });
  });
});
