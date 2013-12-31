<?php

/**
 * @file
 * template.php
 */

/**
 * Theme wrapper function for the primary menu links.
 */
function zachseifts_menu_tree__primary(&$variables) {
  return '<ul class="menu nav nav-pills pull-right"">' . $variables['tree'] . '</ul>';
}

/**
 * Implements hook_preprocess_node();
 */
function zachseifts_preprocess_node(&$variables) {
  // Changes how the 'Submitted by' line reads.
  $variables['submitted'] = t('!datetime',
    array('!datetime' => $variables['date']));
}

