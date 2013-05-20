<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Default ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp.png',
  'theme' => 'asp',
  'css' => 'asp.css',
  'regions' => array(
		'header' => t('Header'),
		'column_first' => t('First column'),
		'column_second' => t('Second column'),
		'column_third' => t('Third column'),
		'footer' => t('Footer'),
	),
);
