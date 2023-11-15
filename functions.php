<?php
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register menus, custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register theme settings for this theme.
require_once(get_template_directory().'/functions/theme-settings.php');