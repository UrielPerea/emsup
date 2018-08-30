<?php
$module_name = 'MA_Usuario';
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
        'LBL_DETAILVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_detailview_panel4' => 
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
