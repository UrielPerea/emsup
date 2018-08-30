<?php
$module_name = 'roles_administracion';
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
            'name' => 'nombre',
            'label' => 'LBL_NOMBRE',
          ),
          1 => 
          array (
            'name' => 'correo',
            'label' => 'LBL_CORREO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estatus',
            'label' => 'LBL_ESTATUS',
          ),
        ),
      ),
    ),
  ),
);
;
?>
