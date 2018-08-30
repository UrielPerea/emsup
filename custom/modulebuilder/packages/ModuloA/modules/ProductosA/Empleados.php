<?php 
if(!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

class Empleados {

	function save(&$bean, $event, $arguments){
		

		$db = DBManagerFactory::getInstance();
		$GLOBALS['log']->fatal("-------Bancos Proveedores--------");
		$GLOBALS['log']->fatal($_POST['banco']);
		//$GLOBALS['log']->fatal($_POST['sucursal']);
		$GLOBALS['log']->fatal($_POST['nCuenta']);
		$GLOBALS['log']->fatal($_POST['clabe']);
		//$GLOBALS['log']->fatal($_POST['nTarjeta']);
		$GLOBALS['log']->fatal("---------------------");
		$banco = implode(",", $_POST['banco']);
		//$sucursal = implode(",", $_POST['sucursal']);
		$ncuenta = implode(",", $_POST['nCuenta']);
		$clabe = implode(",", $_POST['clabe']);
		//$ntarjeta = implode(",", $_POST['nTarjeta']);

		$query_update_banco ="UPDATE ive_registroproveedores_cstm SET banco_c ='".$banco."', ncuenta_c='".$ncuenta."', clabe_c ='".$clabe."' WHERE id_c = '".$bean->nombre."'";

		$db->query($query_update_banco, true);
		

	}

}

?>