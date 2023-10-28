<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="top_header">
    <div class="top_bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <?php
            if (has_custom_logo()) {
              the_custom_logo();
            }
            ?>
          </div>
          <div class="col-sm-10">...</div>
        </div>
      </div>
    </div>
  </header>