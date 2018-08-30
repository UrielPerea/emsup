<?php 
if(!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

class Empleados {

	function save($bean, $event, $arguments){
		
		$bean->name=strtoupper($bean->name);

		echo "hola mundo";

		$GLOBALS["log"]->fatal("hola");
		

	}

}

?>