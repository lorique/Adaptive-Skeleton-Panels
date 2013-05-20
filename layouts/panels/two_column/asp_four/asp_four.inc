<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('50/50 ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp_four.png',
  'theme' => 'asp-four',
  'css' => 'asp_four.css',
  'regions' => array(
		'column_first' => t('First column'),
		'column_second' => t('Second column'),
	),
);
