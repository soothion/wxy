<?php
$this->breadcrumbs=array(
	'文章'=>array('users/admin'),
	$model->username,
);
?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>