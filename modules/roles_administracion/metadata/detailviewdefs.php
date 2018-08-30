<?php
$module_name = 'roles_administracion';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'numero',
            'label' => 'LBL_NUMERO',
          ),
          1 => 
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
