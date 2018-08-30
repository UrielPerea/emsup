<?php 
	$hook_version = 1;
	$hook_array = Array();

	$hook_array['before_save'] = Array();
	$hook_array['before_save'][] = Array(
		1,
		'Empleados',
		'custom\modules\prue1_Personas\logic\Empleados.php',
		'Empleados',
		'save'
	);	

	$hook_array['after_save'] = Array();
	$hook_array['after_save'][] = Array(
		2,
		'imprime un echo',
		'custom\modules\prue1_Personas\logic\imprimir.php',
		'imprimir',
		'impri'
	);
			


?>