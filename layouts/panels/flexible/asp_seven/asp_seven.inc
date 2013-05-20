<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('25/50/25 flexible ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp_seven.png',
  'theme' => 'asp-seven',
  'css' => 'asp_seven.css',
  'regions' => array(
		'header' => t('Header'),
		'column_first' => t('Flexible first column'),
		'column_second' => t('Second column'),
		'column_third' => t('Flexible third column'),
		'footer' => t('Flexible footer'),
	),
);
