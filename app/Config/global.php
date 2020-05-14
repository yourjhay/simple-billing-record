<?php
/**
 * Application Configuration Settings
 */
define('APP_NAME','Billing Record System',true);
define('APP_DESCRIPTION','Simple Billing Record System',true);
define('BASEURL','',true);
define('APP_KEY', '');

/**
 * Error handling behaviour
 * Set to false in production
 */
define('SHOW_ERRORS', true);

/**
 * Options: 
 *  simply - use the default error handling template.
 *  whoops - use "filp/whoops" error handling library.
 *  **IF you set whoops as default ERROR_HANDLER you need to install it.
 *    run: composer require filp/whoops
 */
define('ERROR_HANDLER','simply', true);

/**
 * Template Engine configuration
 */
define('CACHE_VIEWS', false , true);

/**
 * Database configuration settings
 */
define('DBENGINE','mysql');
define('DBSERVER', 'localhost',true);
define('DBUSER', 'root', true);
define('DBPASS', '', true);
define('DBNAME','billing-record-db', true);