<?php 
	$hook_version = 1;
	$hook_array = Array();

	$hook_array['before_save'] = Array();
	$hook_array['before_save'][] = Array(
		1,
		'Empleados',
		'custom\modulebuilder\packages\Pruebauno\modules\Personas\logic\Empleados.php',
		'Empleados',
		'save'
	);	
			


?>