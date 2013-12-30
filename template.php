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
