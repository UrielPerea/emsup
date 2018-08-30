<?php
$module_name = 'MA_Usuario';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
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
            'name' => 'tel',
            'label' => 'LBL_TEL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'correo',
            'label' => 'LBL_CORREO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'comentarios',
            'studio' => 'visible',
            'label' => 'LBL_COMENTARIOS',
          ),
        ),
      ),
    ),
  ),
);
;
?>
