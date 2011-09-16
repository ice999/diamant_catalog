<?php echo "Create form!!!<br>"; ?>

<?php $form = $this->beginWidget('CActiveForm',
                                 array(
                                      'enableAjaxValidation' => false,
                                      'htmlOptions' => array(
	                                      'enctype' => "multipart/form-data"
                                      )
                                 )
); ?>

<div class="row buttons">
	<?php echo $form->fileField($model, 'image');?>
</div>

<div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить'); ?>
</div>

<?php $this->endWidget(); ?>