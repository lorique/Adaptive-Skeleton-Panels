<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Two column bricked ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp_six.png',
  'theme' => 'asp-six',
  'css' => 'asp_six.css',
  'regions' => array(
		'header' => t('Header'),
		'column_first' => t('First column'),
		'column_second' => t('Second column'),
		'middle' => t('Middle column'),
		'column_third' => t('Third column'),
		'column_fourth' => t('Fourth column'),
		'footer' => t('Footer'),
	),
);
