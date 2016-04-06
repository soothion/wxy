<?php
$this->breadcrumbs=array(
	'文章'=>array('blog/admin'),
	$model->title,
);
?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>