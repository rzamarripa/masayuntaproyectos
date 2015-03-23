
  <?php $usuarioActual = Usuario::model()->obtenerUsuarioActual(); ?>
    <?php $ayudas = detalleProyecto::model()->findAll('ayuda_did=3 && responsable_did='.$usuarioActual->id);
          $ayudaPendiente = new detalleProyecto;
    foreach ($ayudas as $ayuda) {?>
    <div class="well">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$ayuda,
			'baseScriptUrl'=>false,
			'cssFile'=>false,
			'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
			'attributes'=>array(
				'id',
				'nombre',
				'descripcion',
				array(	'name'=>'proyecto_did',
					        'value'=>$ayuda->proyecto->nombre,),
			),
		)); ?>
		<div style="margin-right:1px;" class="row">
		<?php echo CHtml::link('<button class="btn btn-info pull-right">Aceptar</button>',array(
			'detalleProyecto/update','id'=>$ayuda->id,'Ayuda'=>1));
	        echo CHtml::link('<button style="margin-right:10px;" class="btn btn-danger pull-right">Rechazar</button>',array(
	        'detalleProyecto/update','id'=>$ayuda->id,'Ayuda'=>2));?>
    	</div>
    </div>
     <?php } ?>