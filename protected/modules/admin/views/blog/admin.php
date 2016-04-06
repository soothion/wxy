<?php
$this->breadcrumbs=array(
	'文章',
);
$create=Yii::app()->createUrl('admin/blog/create');
?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'blog-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		array(
			'header'=>'Category',
			'value'=>'$data->category->title',
			),
		'title',
                array( 
                    'name'=>'content',
                    'value'=>'Chtml::encode(Helper::truncate_utf8_string($data->content,100))',
                ),
		array(
                        'header'=>'<a href="'.$create.'"><i class="icon-plus"></i></a>',
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{update}{delete}'
		),
	),
)); ?>
