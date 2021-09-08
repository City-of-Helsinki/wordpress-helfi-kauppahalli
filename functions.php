<?php
/**
 * Change me functions and definitions
 *
 * @package Change me
 */

/**
 * Theme setup functions.
 */
require get_template_directory() . '/inc/functions/theme-setup.php';

/**
 * Register widgetized area and update sidebar with default widgets.
 */
require get_template_directory() . '/inc/functions/widgetize.php';

/**
 * Load scripts the right way in wordpress.
 */
require get_template_directory() . '/inc/functions/load-scripts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/functions/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/functions/extras.php';