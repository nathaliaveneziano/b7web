<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="top-header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="collapse navbar-collapse">
            <?php
            if (has_nav_menu('top')) {
              wp_nav_menu(array(
                'theme_location' => 'top',
                'container' => false,
                'fallback_cb' => false,
                'menu_class' => 'navbar-nav',
                'add_li_class' => 'nav-item',
                'add_a_class' => 'nav-link',
              ));
            }
            ?>
          </div>
        </div>
      </nav>
    </div>
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
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
                'menu_class' => 'navbar-nav',
                'add_li_class' => 'nav-item',
                'add_a_class' => 'nav-link',
              ));
            }
            ?>
            <div class="search-area">
              <?php get_search_form(); ?>
            </div>
          </div>
          <div class="main-info">
            <div class="row">
              <div class="col-sm-8">...</div>
              <div class="col-sm-4 social-area">...</div>
            </div>
          </div>
        </div>
        <div class="news">news</div>
      </div>
    </div>
    </div>
  </header>
  