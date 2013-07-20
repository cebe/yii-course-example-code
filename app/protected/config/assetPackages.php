<?php

// see wiki for detailed explanation
// http://www.yiiframework.com/doc/api/1.1/CClientScript#packages-detail
return array(
	'base' => array(
		'basePath' => 'application.assets',
		'css' => array(
			'base.css'
		),
		'depends' => array(
			'bootstrap',
		)
	),
	'another' => array(
		'js' => array(
			// ...
		),
		'depends' => array(
			'base',
			'jquery',

		)
	)
);