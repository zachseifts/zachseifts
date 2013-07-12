<?php

/**
 * @file template.php
 */

/**
 * Overrides the default menu_tree__primary theme function
 */
function zachseifts_menu_tree__primary(&$variables) {
  return '<ul class="menu nav nav-pills pull-right">' . $variables['tree'] . '</ul>';
}

/**
 * Implements hook_breadcrumb()
 */
function zachseifts_breadcrumb($vars) {
  $breadcrumb = $vars['breadcrumb'];

  if (!empty($breadcrumb)) {
    $breadcrumbs = '<ul class="breadcrumb">';

    $count = count($breadcrumb) - 1;
    foreach($breadcrumb as $key => $value) {
      if($count != $key) {
        $breadcrumbs .= '<li>'.$value.'<span class="divider">/</span></li>';
      }else{
        $breadcrumbs .= '<li>'.$value.'</li>';
      }
    }
    $breadcrumbs .= '<li><span class="divider">/</span>' . drupal_get_title() . '</li>';
    $breadcrumbs .= '</ul>';

    return $breadcrumbs;
  }
}
