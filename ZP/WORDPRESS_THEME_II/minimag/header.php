<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <?php if (get_theme_mod('nv_topmenu_show')) : ?>
      <div class="top-header">
        <nav class="navbar navbar-expand-md">
          <div class="container">
            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
              <?php
              if (has_nav_menu('top')) {
                wp_nav_menu(array(
                  'theme_location'  => 'top',
                  'container'       => false,
                  'fallback_cb'     => false,
                  'menu_class'      => 'navbar-nav',
                  'add_li_class'    => 'nav-item',
                  'add_a_class'     => 'nav-link',
                ));
              }
              ?>
            </div>
          </div>
        </nav>
      </div>
    <?php endif; ?>
    <div class="main-header">
      <div class="container">
        <div class="logo">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          }
          ?>
        </div>
        <div class="main-nav-border">
          <div class="main-nav">
            <a href="<?php home_url('/'); ?>" class="main-nav-home">
              <img src="<?= get_template_directory_uri() . '/assets/images/home.svg'; ?>" alt="">
            </a>
            <?php
            if (has_nav_menu('primary')) {
              wp_nav_menu(array(
                'theme_location'  => 'primary',
                'container'       => false,
                'fallback_cb'     => false,
                'menu_class'      => 'navbar-nav',
                'add_li_class'    => 'nav-item',
                'add_a_class'     => 'nav-link',
              ));
            }
            ?>
            <div class="search-area">
              <?php
              if (get_theme_mod('nv_search_show')) {
                get_search_form();
              }
              ?>
            </div>
          </div>
          <div class="main-info">
            <div class="row">
              <div class="col-sm-8 random-post">
                <strong>WHAT'S NEW?</strong>
                <?php
                if (function_exists('wpp_get_mostpopular')) {
                  wpp_get_mostpopular(array(
                    'limit' => 1,
                    'wpp_start' => '',
                    'wpp_end' => '',
                    'post_html' => '<a href="{url}">{text_title}</a>',
                  ));
                } else {
                  $nv_query = new WP_Query(array(
                    'posts_per_page'  => 1,
                    'post_type'       => 'post',
                    'orderby'         => 'rand',
                    'post_status'     => 'publish',
                  ));

                  if ($nv_query->have_posts()) :
                    while ($nv_query->have_posts()) :
                      $nv_query->the_post();
                ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                  endif;
                }
                ?>
              </div>
              <div class="col-sm-4 social-area">
                <strong>FOLLOW:</strong>
                <ul class="icons">
                  <?php if (get_theme_mod('nv_social_dribbble')) : ?>
                    <li><a href="<?= get_theme_mod('nv_social_dribbble'); ?>"><img src="<?= get_template_directory_uri() . '/assets/images/dribbble.svg'; ?>" alt="Dribbble"></a></li>
                  <?php endif; ?>
                  <?php if (get_theme_mod('nv_social_facebook')) : ?>
                    <li><a href="<?= get_theme_mod('nv_social_facebook'); ?>"><img src="<?= get_template_directory_uri() . '/assets/images/facebook.svg'; ?>" alt="Facebook"></a></li>
                  <?php endif; ?>
                  <?php if (get_theme_mod('nv_social_instagram')) : ?>
                    <li><a href="<?= get_theme_mod('nv_social_instagram'); ?>"><img src="<?= get_template_directory_uri() . '/assets/images/instagram.svg'; ?>" alt="Instagram"></a></li>
                  <?php endif; ?>
                  <?php if (get_theme_mod('nv_social_twitter')) : ?>
                    <li><a href="<?= get_theme_mod('nv_social_twitter'); ?>"><img src="<?= get_template_directory_uri() . '/assets/images/twitter.svg'; ?>" alt="Twitter"></a></li>
                  <?php endif; ?>
                  <?php if (get_theme_mod('nv_social_youtube')) : ?>
                    <li><a href="<?= get_theme_mod('nv_social_youtube'); ?>"><img src="<?= get_template_directory_uri() . '/assets/images/youtube.svg'; ?>" alt="Youtube"></a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if (get_header_image()) : ?>
      <div class=" container custom-header">
        <img src="<?php header_image(); ?>" alt="">
      </div>
    <?php endif; ?>
  </header>