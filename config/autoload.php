<?php

/**
 * Cache-Klasse für Contao Open Source CMS
 *
 * Copyright (C) 2017 Frank Hoppe
 *
 * @package    Cache
 * @link       http://github.com/Samson1964/contao-cache/
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Samson',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Samson\Helper\Cache' => 'system/modules/cache/classes/Cache.php',
)); 
