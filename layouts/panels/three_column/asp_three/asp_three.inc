<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('25/50/25 stacked ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp_three.png',
  'theme' => 'asp-three',
  'css' => 'asp_three.css',
  'regions' => array(
		'header' => t('Header'),
		'column_first' => t('First column'),
		'column_second' => t('Second column'),
		'column_third' => t('Third column'),
		'footer' => t('Footer'),
	),
);
