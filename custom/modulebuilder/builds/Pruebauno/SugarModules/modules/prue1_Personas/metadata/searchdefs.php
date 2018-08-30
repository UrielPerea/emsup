<?php
$module_name = 'prue1_Personas';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'tel' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_TEL',
        'width' => '10%',
        'default' => true,
        'name' => 'tel',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'tel' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_TEL',
        'width' => '10%',
        'default' => true,
        'name' => 'tel',
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
