<?php

//Chamar a tag title
function bs4wp_title_tag() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'bs4wp_title_tag');
// Previnir o erro em versões antigas na tag title
if(!function_exists('_wp_render_title_tag')) {
  function bs4wp_render_title() {
    ?>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php
  }
  add_action('wp_head', 'bs4wp_render_title');
}

?>