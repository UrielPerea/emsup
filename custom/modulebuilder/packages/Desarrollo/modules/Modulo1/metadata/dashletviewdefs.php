<?php
$dashletData['des_Modulo1Dashlet']['searchFields'] = array (
  'nombre' => 
  array (
    'default' => '',
  ),
  'fecha' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
);
$dashletData['des_Modulo1Dashlet']['columns'] = array (
  'nombre' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE',
    'width' => '35%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '25%',
    'default' => true,
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
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
);
