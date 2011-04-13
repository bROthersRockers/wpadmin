#!/usr/bin/env php
<?php

/**
 * @file
 * wpadmin is a PHP script implementing a command line shell for WordPress. It 
 * has been modeled after drush and much of the approaches here should be
 * attributed to the authors of that project.
 *
 * @requires PHP CLI 5.2.0, or newer.
 */

define('WPADMIN_BASE_PATH', dirname(__FILE__));

require_once WPADMIN_BASE_PATH . '/lib/wp_loader.php';

echo "hello world \n";