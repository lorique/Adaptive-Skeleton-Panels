<?php

/**
 * @see hook_css_alter()
 * Implementation unsets core css files which are defined in theme info file.
 */
function asp_css_alter(&$css) {
  global $theme_info;
  $unset = $theme_info->info['unset_core'];

  foreach ($unset AS $css_file => $filename) {
    if (isset($css[$css_file])) {
      unset($css[$css_file]);
    }
  }
}

/**
 * Implements hook_html_head_alter().
 * This will overwrite the default meta character type tag with HTML5 version.
 */
function asp_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 *  @see hook_page_alter()
 */
function asp_page_alter($page) {
  // <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
    'name' =>  'viewport',
    'content' =>  'width=device-width, initial-scale=1, maximum-scale=1'
    )
  );
  drupal_add_html_head($viewport, 'viewport');
}
