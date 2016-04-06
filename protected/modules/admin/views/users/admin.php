<?php
$this->breadcrumbs=array(
	'用户',
);
$create=Yii::app()->createUrl('admin/users/create');
?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'username',
		'openid',
		array(
                        'header'=>'<a href="'.$create.'"><i class="icon-plus"></i></a>',
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{update}{delete}'
		),
	),
)); ?>
