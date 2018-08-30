<?php
$module_name = 'MA_Productos';
$listViewDefs [$module_name] = 
array (
  'CLAVE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLAVE',
    'width' => '10%',
    'default' => true,
  ),
  'NOMBRE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE',
    'width' => '10%',
    'default' => true,
  ),
  'PRECIO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRECIO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'CATEGORIA' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORIA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPCION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPCION',
    'sortable' => false,
    'width' => '10%',
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
