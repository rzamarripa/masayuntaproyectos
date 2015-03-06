<?php
$this->pageCaption='Crear Actividad';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nueva Actividad';
$this->breadcrumbs=array(
	'Actividad'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Volver','url'=>array('proyecto/index')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>