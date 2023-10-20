jQuery(function () {
  jQuery('.back-to-top').on('click', function () {
    jQuery('html, body').animate({ scrollTop: 0 }, 800);
    return false;
  });
});
