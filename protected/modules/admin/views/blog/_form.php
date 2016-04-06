<div class="form">
    <?php
    $form     = $this->beginWidget('bootstrap.widgets.TbActiveForm',
                                   array(
        'id'                   => 'blog-form',
        'enableAjaxValidation' => false,
        'htmlOptions'          => array('class' => 'well', 'enctype' => 'multipart/form-data'),
    ));

    ?>

    <?php echo $form->errorSummary($model); ?>
    <?php
    $category = Category::model()->findAll();
    foreach ($category as $val)
    {
        $categorys[$val->id] = $val->title;
    }

    ?>
    <?php echo $form->dropDownList($model, 'cid', $categorys,
                                     array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'title',
                                 array('class' => 'span5', 'maxlength' => 50)); ?>

<?php
   $form->widget('ext.ueditor.UeditorWidget',
            array(
                'model' => $model,
                'attribute' => 'content',
                'htmlOptions' => array('rows'=>6, 'cols'=>50)
    ));

?>


    <div class="row">
<?php
$this->widget('bootstrap.widgets.TbButton',
              array(
    'buttonType' => 'submit',
    'type'       => 'primary',
    'label'      => $model->isNewRecord ? 'Create' : 'Save',
));

?>
    </div>

<?php $this->endWidget(); ?>
</div>