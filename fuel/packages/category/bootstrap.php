<?php

Autoloader::add_core_namespace('Category', true);

Autoloader::add_classes(array(
	'Category\\Category' => __DIR__ . '/classes/category.php',
	'Category\\Validation'                => __DIR__.'/classes/validation.php',
	'Category\\CategoryException' => __DIR__ . '/classes/category.php',
	'Category\\Model\Category' => __DIR__ . '/classes/model/category.php',
	'Category\\Access' => __DIR__ . '/classes/access.php',

));
