<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('One column ASP layout'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp_one_column.png',
  'theme' => 'asp-one-column',
  'css' => 'asp-one-column.css',
  'regions' => array(
		'column_first' => t('First column'),
	),
);
