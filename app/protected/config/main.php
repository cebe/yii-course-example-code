<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// setting application theme to classic
	'theme' => 'classic',


	// preloading 'log' and 'bootstrap' component
	'preload'=>array('log', 'bootstrap'),


	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),


	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1337',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		// all the arrays in here are passed to Yii::createComponent()

		// loading twitter bootstrap extension
		'bootstrap' => array(
			'class' => 'ext.bootstrap.TwitterBootstrap',
		),

		// configure javascript and css packages
		'clientScript' => array(
			'packages' => include(__DIR__.'/assetPackages.php'),
		),

		// force assetManager to copy assets in development mode
		'assetManager' => array(
			'forceCopy' => YII_DEBUG,
		),

		'request' => array(
			// you can override framework components and add them
			// here by setting class explicitly
//			'class' => 'application.components.MyRequest',

			// enable automatic CSRF validation for every form
			'enableCsrfValidation' => true,
		),

		// enable caching by using CFileCache backend
		// Refer to http://www.yiiframework.com/doc/guide/1.1/en/caching.overview
		// for a list of available backends
		'cache' => array(
			'class' => 'CFileCache'

			// configure more class properties here
		),

		// this is an instance of CWebUser by default
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),


		// uncomment the following to enable URLs in path-format
		// you need a .htaccess file if you set 'showScriptName' to false,

		// index.php/user/view/5
/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'rules'=>array(
				// a more complex rule definition
				// all array keys are properties of CUrlRule
				array(
					'post/update',
					'class' => 'application.components.UrlRule', // this way you can use a custom UrlRule class
					'pattern' => 'post/<id:\d+>/<title:.*>',
					'verb' => 'PUT',
					'parsingOnly' => true, // this rule is only used when parsing url, not for creating
				),

				'post/<id:\d+>/<title:.*>'=>'post/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
*/

		// using sqlite as the database
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),

		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/


		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		// widget factory is used to customize widget appearance and properties
		'widgetFactory'=>array(
			'class'=>'CWidgetFactory',

			'enableSkin' => true,

			'widgets' => array(
				'CLinkPager' => array(
					'skin' => 'short',
				),
				'CGridView' => array(
					//'cssFile' => false,
					'skin' => 'ugly',
				),
			)

        ),


		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),

				// show trace log on website
				array(
					'class'=>'CWebLogRoute',
					'categories' => array(
						'application.*',
						//'system.*', // show yii internals
						'system.db.*', // this is good for debugging database stuff
					),
					'enabled' => YII_DEBUG // only in debug mode
				),

				// show profiling results on website
				array(
					'class'=>'CProfileLogRoute',
					'categories' => 'application.*',
					'enabled' => YII_DEBUG // only in debug mode
				),

			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'mail@cebe.cc',
		'x' => array(
			'y' => 'z'
		),
	),
);
