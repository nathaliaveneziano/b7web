<?php
get_header();
?>

<?php
if (is_home()) {
  get_template_part('template-parts/banner', 'home');
} else {
  get_template_part('template-parts/banner', 'single');
}
?>
<main>main</main>

<?php
get_footer();
