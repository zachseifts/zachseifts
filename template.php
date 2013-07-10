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
