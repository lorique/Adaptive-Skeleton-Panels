<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('ASP page layout one'),
  'category' => t('Adaptive Skeleton Panels'),
  'icon' => 'asp-page-one.png',
  'theme' => 'asp-page-one',
  'css' => 'asp-page-one.css',
  'regions' => array(
    'corporate_area' => t('Corporate area'),
    'logo_area' => t('Logo area'),
    'center_banner' => t('Center banner'),
    'call_to_action' => t('Call to action'),
    'main_menu' => t('Main menu'),
    'main' => t('Main'),
    'footer' => t('Footer'),
    'branding' => t('Branding'),
    'branding_two' => t('Branding two'),
  ),
);
