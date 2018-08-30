<?php
$module_name = 'des_Modulo1';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'nombre' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NOMBRE',
        'width' => '10%',
        'default' => true,
        'name' => 'nombre',
      ),
      'fecha' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
    ),
    'advanced_search' => 
    array (
      'nombre' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NOMBRE',
        'width' => '10%',
        'default' => true,
        'name' => 'nombre',
      ),
      'fecha' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
