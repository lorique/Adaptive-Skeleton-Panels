<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('50/50 stacked ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp_five.png',
  'theme' => 'asp-five',
  'css' => 'asp_five.css',
  'regions' => array(
		'header' => t('Header'),
		'column_first' => t('First column'),
		'column_second' => t('Second column'),
		'footer' => t('Footer'),
	),
);
