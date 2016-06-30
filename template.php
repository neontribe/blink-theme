<?php
/**
 * @file template.php for bananalink theme hooks.
 */

/**
 * Implements THEME_preprocess_node().
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function bananalink_preprocess_node(&$variables, $hook) {
  // Change the submitted value to date only. By default includes Author and time as well.
  // To enable on a content type, alter the Display Settings for it.
  $variables['submitted'] = format_date(time($variables['date']), 'custom', 'd.m.Y');
}
