<?php 
	$hook_version = 1;
	$hook_array = Array();

	$hook_array['before_save'] = Array();
	$hook_array['before_save'][] = Array(
		1,
		'Empleados',
		'modules\prue1_Personas\logic\Empleados.php',
		'Empleados',
		'save'
	);	
			


?>