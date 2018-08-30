<?php
$module_name = 'des_Modulo1';
$listViewDefs [$module_name] = 
array (
  'NOMBRE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE',
    'width' => '32%',
    'default' => true,
  ),
  'FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA',
    'width' => '32%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '32%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>
