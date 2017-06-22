<?php

Autoloader::add_core_namespace('Contacts');

Autoloader::add_classes(array(
	'Contacts\\Contacts' => __DIR__ . '/classes/contacts.php',
	'Contacts\\ContactsException' => __DIR__ . '/classes/contacts.php',

	'Contacts\\Validation'                => __DIR__.'/classes/validation.php',
	'Contacts\\Validation\Contact'                => __DIR__.'/classes/validation/contact.php',
	'Contacts\\Model\Contact' => __DIR__ . '/classes/model/contact.php',
	'Contacts\\Access' => __DIR__ . '/classes/access.php',

));
