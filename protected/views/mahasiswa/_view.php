<?php
/* @var $this MahasiswaController */
/* @var $data Mahasiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nim')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nim), array('view', 'id'=>$data->nim)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />


</div>