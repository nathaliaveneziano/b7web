<?php

function wordpress_popular_posts_fail_load_admin_notice()
{
  $screen = get_current_screen();
  if (isset($screen->parent_file) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id) {
    return;
  }

  if ('true' === get_user_meta(get_current_user_id(), '_wordpress_popular_posts_install_notice', true)) {
    return;
  }

  $plugin = 'wordpress-popular-posts/wordpress-popular-posts.php';

  $installed_plugins = get_plugins();

  $is_wpp_installed = isset($installed_plugins[$plugin]);

  if ($is_wpp_installed) {
    if (!current_user_can('activate_plugins')) {
      return;
    }

    $message = esc_html__('O tema Minimag Theme utiliza o plugin Wordpress Popular Posts para exibir e listar os posts mais acessados pelos usuários. Ative-o para que seu tema apresente todas as informações presentes.', 'minimag');

    $button_text = esc_html__('Ativar Wordpress Popular Posts', 'minimag');
    $button_link = wp_nonce_url('plugins.php?action=activate&amp;plugin=' . $plugin . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $plugin);
  } else {
    if (!current_user_can('install_plugins')) {
      return;
    }

    $message = esc_html__('O tema Minimag Theme utiliza o plugin Wordpress Popular Posts para exibir e listar os posts mais acessados pelos usuários. Instale-o para que seu tema apresente todas as informações presentes.', 'minimag');

    $button_text = esc_html__('Instalar Wordpress Popular Posts', 'minimag');
    $button_link = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=wordpress-popular-posts'), 'install-plugin_wordpress-popular-posts');
  }

?>
  <style>
    .notice.wpp-notice {
      border: 1px solid #ccd0d4;
      border-inline-start: 4px solid #9b0a46 !important;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.15);
      display: flex;
      padding: 0px;
    }

    .notice.wpp-notice .wpp-notice-aside {
      width: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(215, 43, 63, 0.04);
    }

    .notice.wpp-notice .wpp-notice-aside img {
      width: 5.5rem;
      border-radius: 50%;
    }

    .notice.wpp-notice .wpp-notice-inner {
      display: table;
      padding: 20px 0px;
      width: 100%;
    }

    .notice.wpp-notice .wpp-notice-content {
      padding: 0 20px;
    }

    .notice.wpp-notice p {
      padding: 0;
      margin: 0;
    }

    .notice.wpp-notice h3 {
      margin: 0 0 5px;
    }

    .notice.wpp-notice .wpp-install-now {
      display: block;
      margin-block-start: 15px;
    }

    .notice.wpp-notice .wpp-install-now .wpp-install-button {
      background: #127DB8;
      border-radius: 3px;
      color: #fff;
      text-decoration: none;
      height: auto;
      line-height: 20px;
      padding: 0.4375rem 0.75rem;
      text-transform: capitalize;
    }

    .notice.wpp-notice .wpp-install-now .wpp-install-button:active {
      transform: translateY(1px);
    }

    @media (max-width: 767px) {
      .notice.wpp-notice.wpp-install-elementor {
        padding: 0px;
      }

      .notice.wpp-notice .wpp-notice-inner {
        display: block;
        padding: 10px;
      }

      .notice.wpp-notice .wpp-notice-inner .wpp-notice-content {
        display: block;
        padding: 0;
      }

      .notice.wpp-notice .wpp-notice-inner .wpp-install-now {
        display: none;
      }
    }
  </style>
  <script>
    jQuery(function($) {
      $('div.notice.wpp-install-elementor').on('click', 'button.notice-dismiss', function(event) {
        event.preventDefault();

        $.post(ajaxurl, {
          action: 'wordpress_popular_posts_set_admin_notice_viewed'
        });
      });
    });
  </script>
  <div class="notice updated is-dismissible wpp-notice wpp-install-elementor">
    <div class="wpp-notice-aside">
      <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/wordpress-popular-posts.png'; ?>" alt="<?php echo esc_attr__('Get Elementor', 'minimag'); ?>" />
    </div>
    <div class="wpp-notice-inner">
      <div class="wpp-notice-content">
        <h3><?php echo esc_html__('Obrigado por instalar o tema Minimag!', 'minimag'); ?></h3>
        <p><?php echo esc_html($message); ?></p>
        <div class="wpp-install-now">
          <a class="wpp-install-button" href="<?php echo esc_attr($button_link); ?>"><?php echo esc_html($button_text); ?></a>
        </div>
      </div>
    </div>
  </div>
<?php
}

/**
 * Set Admin Notice Viewed.
 *
 * @return void
 */
function ajax_wordpress_popular_posts_set_admin_notice_viewed()
{
  update_user_meta(get_current_user_id(), '_wordpress_popular_posts_install_notice', 'true');
  die;
}

add_action('wp_ajax_wordpress_popular_posts_set_admin_notice_viewed', 'ajax_wordpress_popular_posts_set_admin_notice_viewed');
if (!did_action('elementor/loaded')) {
  add_action('admin_notices', 'wordpress_popular_posts_fail_load_admin_notice');
}
