<?php
/* @var $this SubCategoryController */
/* @var $model SubCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sub-category-form',
<<<<<<< HEAD
=======
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
>>>>>>> 1c54d3b6c76671b18fab1f829ca4690e941530b9
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
<<<<<<< HEAD
        <?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
=======
		<?php echo $form->textField($model,'status'); ?>
>>>>>>> 1c54d3b6c76671b18fab1f829ca4690e941530b9
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
<<<<<<< HEAD
		<?php echo $form->dropDownList($model,'category_id',CHtml::listData(Category::model()->findAll(),'name','name'));?>
=======
		<?php echo $form->textField($model,'category_id'); ?>
>>>>>>> 1c54d3b6c76671b18fab1f829ca4690e941530b9
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'image',array('size'=>45,'maxlength'=>45)); ?>
=======
		<?php echo $form->fileField($model, 'image'); ?>
>>>>>>> 1c54d3b6c76671b18fab1f829ca4690e941530b9
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->