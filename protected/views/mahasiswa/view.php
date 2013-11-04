<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	$model->nim,
);

$this->menu=array(
	array('label'=>'List Mahasiswa', 'url'=>array('index')),
	array('label'=>'Create Mahasiswa', 'url'=>array('create')),
	array('label'=>'Update Mahasiswa', 'url'=>array('update', 'id'=>$model->nim)),
	array('label'=>'Delete Mahasiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nim),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mahasiswa', 'url'=>array('admin')),
);
?>

<h1>View Mahasiswa #<?php echo $model->nim; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nim',
		'nama',
	),
)); ?>
