<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('25/50/25 ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp_two.png',
  'theme' => 'asp-two',
  'css' => 'asp_two.css',
  'regions' => array(
		'column_first' => t('First column'),
		'column_second' => t('Second column'),
		'column_third' => t('Third column'),
	),
);
