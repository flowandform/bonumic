<?php

@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');

function fnf_register_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('bonumic-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'fnf_register_styles');


function fnf_register_scripts()
{
  wp_enqueue_script('bonumic-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
  wp_enqueue_script('bonumic-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
  wp_enqueue_script('bonumic-headroom', 'https://cdn.jsdelivr.net/npm/headroom.js@0.11.0/dist/headroom.min.js', array(), '0.11', true);
  wp_enqueue_script('bonumic-jquery-headroom', 'https://cdn.jsdelivr.net/npm/headroom.js@0.9.4/dist/jQuery.headroom.min.js', array(), '0.11', true);
}

add_action('wp_enqueue_scripts', 'fnf_register_scripts');

function fnf_hook_javascript_footer()
{
?>
  <script id="mcjs">
    ! function(c, h, i, m, p) {
      m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
    }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/657d5e4797948b82a9a6a5e12/e7bbdf41a86379fd9825661c2.js");
  </script>
<?php
}

add_action('wp_footer', 'fnf_hook_javascript_footer');

add_theme_support('post-thumbnails');

function fnf_add_favicon()
{
  echo '<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/bonumic/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/bonumic/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/bonumic/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/wp-content/themes/bonumic/assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="/wp-content/themes/bonumic/assets/favicon/safari-pinned-tab.svg" color="#2d14e3">
  <meta name="msapplication-TileColor" content="#2d14e3">
  <meta name="theme-color" content="#f7f7f7">';
}

add_action('wp_head', 'fnf_add_favicon');

if (class_exists('MultiPostThumbnails')) {
  new MultiPostThumbnails(
    array(
      'label' => __('Actual Featured Image!', 'bonumic'),
      'id' => 'secondary-image',
      'post_type' => 'post'
    )
  );
}
