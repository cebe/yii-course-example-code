<?php
/**
 * Example cache dependency used in UserController
 */
class ExampleDependency extends CCacheDependency
{
	protected function generateDependentData() {
		return Yii::app()->db->createCommand(
			"SELECT COUNT(*) FROM users;"
		)->queryScalar();
	}
}