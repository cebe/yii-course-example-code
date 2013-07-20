<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cebe
 * Date: 20.06.13
 * Time: 12:26
 * To change this template use File | Settings | File Templates.
 */

class UpdateAction extends CAction
{
	/**
	 * @var string the name of the class used by this action
	 */
	public $modelClass;

	public function run($id)
	{
		/** @var CActiveRecord $model */
		$model=$this->controller->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST[$this->modelClass]))
		{
			$model->attributes=$_POST[$this->modelClass];
			if($model->save())
				$this->controller->redirect(array('view','id'=>$model->id));
		}

		$this->controller->render('update',array(
			'model'=>$model,
		));

	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}