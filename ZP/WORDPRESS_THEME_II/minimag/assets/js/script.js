window.morePostsLoading = false;

function LoadMorePosts() {
  if (window.morePostsLoading === false) {
    window.morePostsLoading = true;
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

        window.morePostsLoading = false;
      },
    });
  }
}

jQuery(function () {
  jQuery('.back-to-top').on('click', function () {
    jQuery('html, body').animate({ scrollTop: 0 }, 800);
    return false;
  });

  jQuery('.load-more-btn').on('click', LoadMorePosts);

  jQuery(window).on('scroll', function () {
    // window.scrollY = A posição atual do scroll
    // document.body.scrollHeight = A altura total do site

    const pct = (window.scrollY / document.body.scrollHeight) * 100;

    if (pct >= 25) {
      LoadMorePosts();
    }
  });
});
