<?php
$this->breadcrumbs=array(
	'文章'=>array('blog/admin'),
	'添加',
);

?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>