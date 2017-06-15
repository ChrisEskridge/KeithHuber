<?php

// Set the content width based on the theme's design and stylesheet.
require_once locate_template('inc/setup.php'); // Setup Theme (Supports)
require_once locate_template('inc/scripts.php'); // Scripts
require_once locate_template('inc/widgets.php'); // Widgets
require_once locate_template('inc/admin-changes.php'); // Changes to WP Admin
require_once locate_template('inc/custom-post-types.php'); // Custom Post Types

require get_template_directory() . '/inc/template-tags.php';