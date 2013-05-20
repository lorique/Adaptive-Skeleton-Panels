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

/**
 *  @see theme_panels_everywhere_page();
 */
function asp_panels_everywhere_page($vars) {
  $page = &$vars['page'];
  $task = page_manager_get_task('site_template');

  $content = new stdClass();
  $content->title = drupal_get_title();
  $content->content = isset($page['content']) ? $page['content'] : '';

  $args = array($content);
  $contexts = ctools_context_handler_get_task_contexts($task, '', $args);

  // @todo -- we need a way to insert the page content into the panel
  // if for some reason they left out the page content pane.
    $info = ctools_context_handler_render_handler($task, '', $page['#handler'], $contexts, $args, FALSE);

  return theme('page_panels_everywhere', array('page' => $page, 'info' => $info));
}

/**
 *  @see hook_theme()
 */
function asp_theme($existing, $type, $theme, $path) {
  $theme = array();

  $theme['page_panels_everywhere'] = array(
    'template' => 'page-panels-everywhere',
    'variables' => array('page' => NULL, 'info' => NULL),
    'path' => $path.'/templates',
  );

  return $theme;
}
