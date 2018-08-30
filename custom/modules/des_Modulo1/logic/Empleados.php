<?php 
if(!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

class Empleados {

	function save($bean, $event, $arguments){
		
		$bean->nombre=strtoupper($bean->nombre);

		

		$GLOBALS["log"]->fatal("Mensaje antes de guardar");
		

	}

}

?>