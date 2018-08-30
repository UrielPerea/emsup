<?php
$module_name = 'MA_Usuario';
$listViewDefs [$module_name] = 
array (
  'NOMBRE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE',
    'width' => '10%',
    'default' => true,
  ),
  'TEL' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TEL',
    'width' => '10%',
    'default' => true,
  ),
  'CORREO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO',
    'width' => '10%',
    'default' => true,
  ),
  'COMENTARIOS' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_COMENTARIOS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
