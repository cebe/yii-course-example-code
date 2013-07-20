<?php
/* @var $this UserController */
/* @var $model User */
/* @var $showLink boolean */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array();
$this->menu[]=array('label'=>'List User', 'url'=>array('index'));
$this->menu[]=array('label'=>'Create User', 'url'=>array('create'));
if ($showLink) {
	$this->menu[]=array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id));
}
$this->menu[]=array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'));
$this->menu[]=array('label'=>'Manage User', 'url'=>array('admin'));


?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'profile',
		'created',
		'updated',
	),
)); ?>
