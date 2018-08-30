<?php 
if(!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

class Imprimir {

	function impri(&$bean, $event, $arguments){
		
	

		print "hola mundo";

		$GLOBALS["log"]->fatal("Mensaje despues de guardar");
		

	}

}

?>