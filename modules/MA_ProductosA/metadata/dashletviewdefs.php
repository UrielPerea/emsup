<?php
$dashletData['MA_ProductosADashlet']['searchFields'] = array (
  'clave' => 
  array (
    'default' => '',
  ),
  'nombre' => 
  array (
    'default' => '',
  ),
);
$dashletData['MA_ProductosADashlet']['columns'] = array (
  'clave' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLAVE',
    'width' => '10%',
    'default' => true,
    'name' => 'clave',
  ),
  'nombre' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE',
    'width' => '10%',
    'default' => true,
    'name' => 'nombre',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
