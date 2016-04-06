<div class="form">
    <?php
    $model->password = '';
    $form     = $this->beginWidget('bootstrap.widgets.TbActiveForm',
                                   array(
        'id'                   => 'users-form',
        'enableAjaxValidation' => false,
        'htmlOptions'          => array('class' => 'well', 'enctype' => 'multipart/form-data'),
    ));

    ?>

    <?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'username',
                                 array('class' => 'span5', 'maxlength' => 50)); ?>

 <?php echo $form->textFieldRow($model, 'password',
                                 array('class' => 'span5', 'maxlength' => 50)); ?>


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