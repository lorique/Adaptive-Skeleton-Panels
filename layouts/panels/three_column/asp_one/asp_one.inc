<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('33/33/33 ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp_one.png',
  'theme' => 'asp-one',
  'css' => 'asp_one.css',
  'regions' => array(
		'column_first' => t('First column'),
		'column_second' => t('Second column'),
		'column_third' => t('Third column'),
	),
);
