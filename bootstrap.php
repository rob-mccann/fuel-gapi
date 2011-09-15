<?php

/**
 * FuelPHP package for the GAPI PHP Class
 *
 * @package		GAPI
 * @version		1.0
 * @author		Rob McCann (rob@robmccann.co.uk)
 * @link		http://github.com/unforeseen/fuel-gapi
 * 
 */

Autoloader::add_core_namespace('GAPI');

Autoloader::add_classes(array(
	'GAPI\\GAPI' => __DIR__.'/classes/gapi.php',
	'GAPI\\GAPI_ReportEntry' => __DIR__.'/classes/gapi/reportentry.php',
	'GAPI\\GAPI_AccountEntry' => __DIR__.'/classes/gapi/accountentry.php'
	
));
