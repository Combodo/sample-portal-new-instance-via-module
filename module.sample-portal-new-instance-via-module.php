<?php

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sample-portal-new-instance-via-module/2.4.0', array(
	// Identification
	'label' => 'Sample Portal (New instance via module)',
	'category' => 'Portal',
	// Setup
	'dependencies' => array(
		'itop-portal-base/2.4.0'
	),
	'mandatory' => false,
	'visible' => true,
	// Components
	'datamodel' => array(
		'main.sample-portal-new-instance-via-module.php'
	),
	'webservice' => array(
	//'webservices.itop-portal.php',
	),
	'dictionary' => array(
	),
	'data.struct' => array(
	//'data.struct.itop-portal.xml',
	),
	'data.sample' => array(
	//'data.sample.itop-portal.xml',
	),
	// Documentation
	'doc.manual_setup' => '',
	'doc.more_information' => '',
	// Default settings
	'settings' => array(
	),
	)
);
