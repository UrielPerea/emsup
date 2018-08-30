<?php 
	$hook_version = 1;
	$hook_array = Array();

	$hook_array['after_save'] = Array();
	$hook_array['after_save'][] = Array(
		1,
		'Empleados',
		'custom/modules/IVE_RegistroProveedores/logic_hook/Empleados.php',
		'Empleados',
		'save'
	);	
	$hook_array['after_save'][] = Array(
		2,
		'Contacto',
		'custom/modules/IVE_RegistroProveedores/logic_hook/Contacto.php',
		'Contacto',
		'guardar'
	);	
	$hook_array['after_save'][] = Array(
		3,
		'Codigo',
		'custom/modules/IVE_RegistroProveedores/logic_hook/Codigo.php',
		'Codigo',
		'guardarc'
	);			


?>