<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Three 16 column row ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'three_rows.png',
  'theme' => 'three-rows',
  'css' => 'three_rows.css',
  'regions' => array(
		'row_first' => t('First row'),
    'row_second' => t('Second row'),
    'row_third' => t('Third row'),
	),
);
