<?php
/* @var $this DokterController */
/* @var $data Dokter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dokter), array('view', 'id'=>$data->id_dokter)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->nm_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spesialis')); ?>:</b>
	<?php echo CHtml::encode($data->id_spesialis); 
			//echo CHtml::link(CHtml::encode($data->id_spesialis), array('view', 'id'=>$data->id_spesialis));
	?>
	<br />


</div>