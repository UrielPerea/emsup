<?php
$module_name = 'MA_Productos';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'clave',
            'label' => 'LBL_CLAVE',
          ),
          1 => 
          array (
            'name' => 'nombre',
            'label' => 'LBL_NOMBRE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'categoria',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORIA',
          ),
          1 => 
          array (
            'name' => 'precio',
            'label' => 'LBL_PRECIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'descripcion',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPCION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
