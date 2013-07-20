<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cebe
 * Date: 20.06.13
 * Time: 16:23
 * To change this template use File | Settings | File Templates.
 */

class TwitterBootstrap extends CApplicationComponent
{
	public function init() {
		parent::init();

		// simple way

		/** @var CAssetManager $assetManager */
//		$assetManager = Yii::app()->assetManager;
//		$url = $assetManager->publish(__DIR__.'/assets');

		/** @var CClientScript $cs */
//		$cs = Yii::app()->clientScript;
//		$cs->registerCssFile($url . '/css/bootstrap.css');
//
//		$cs->registerScriptFile($url . '/js/bootstrap.js');

		// advanced way

		/** @var CClientScript $cs */
		$cs = Yii::app()->clientScript;
		$cs->addPackage('bootstrap', array(
			'basePath'=>'ext.bootstrap.assets',
			//'baseUrl'=>'',
			// list of js files relative to basePath/baseUrl
			'js'=>array(
				YII_DEBUG ? 'js/bootstrap.js' : 'js/bootstrap.min.js'
			),
			// list of css files relative to basePath/baseUrl
			'css'=>array(
				YII_DEBUG ? 'css/bootstrap.css' : 'css/bootstrap.min.css'
			),
			//'depends'=>array(),
		));

	}
}