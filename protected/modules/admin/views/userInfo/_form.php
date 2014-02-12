<?php
/* @var $this UserInfoController */
/* @var $model UserInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-info-form',
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
<<<<<<< HEAD
=======
		<?php echo $form->labelEx($model,'user_master_id'); ?>
		<?php echo $form->dropDownList($model,'user_master_id',CHtml::listData(userMaster::model()->findAll(),'id','name'));?>
		<?php echo $form->error($model,'user_master_id'); ?>
	</div>
    
	<div class="row">
>>>>>>> 1c54d3b6c76671b18fab1f829ca4690e941530b9
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'dob'); ?>
=======
		<?php $this->widget(
    'ext.jui.EJuiDateTimePicker',
    array(
        'model'     => $model,
        'attribute' => 'dob',
        'language'=> 'en',//default Yii::app()->language
        'mode'    => 'date',//'datetime' or 'time' ('datetime' default)
        'options'   => array(
            'dateFormat' => 'yy.mm.dd',
            //'timeFormat' => '',//'hh:mm tt' default
        ),
    )
);?>
>>>>>>> 1c54d3b6c76671b18fab1f829ca4690e941530b9
		<?php echo $form->error($model,'dob'); ?>
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

	<div class="row">
<<<<<<< HEAD
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_id'); ?>
		<?php echo $form->textField($model,'state_id'); ?>
=======
		<?php echo $form->labelEx($model,'state_id'); ?>
		<?php echo $form->dropDownList($model,'state_id',CHtml::listData(state::model()->findAll(),'id','name'));?>
>>>>>>> 1c54d3b6c76671b18fab1f829ca4690e941530b9
		<?php echo $form->error($model,'state_id'); ?>
	</div>

	<div class="row">
<<<<<<< HEAD
		<?php echo $form->labelEx($model,'user_master_id'); ?>
		<?php echo $form->textField($model,'user_master_id'); ?>
		<?php echo $form->error($model,'user_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'university_id'); ?>
		<?php echo $form->textField($model,'university_id'); ?>
		<?php echo $form->error($model,'university_id'); ?>
	</div>

=======
		<?php echo $form->labelEx($model,'university_id'); ?>
		<?php echo $form->dropDownList($model,'university_id',CHtml::listData(University::model()->findAll(),'id','name'));?>
		<?php echo $form->error($model,'university_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
    
>>>>>>> 1c54d3b6c76671b18fab1f829ca4690e941530b9
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->