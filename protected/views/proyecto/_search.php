<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="clearfix">
		<?php echo $form->label($model,'id'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11,'class'=>'form-control')); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcion'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaInicio_ft'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fechaInicio_ft'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaFin_ft'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fechaFin_ft'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'responsable_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"responsable_did",CHtml::listData(Responsable::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"estatus_did",CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>