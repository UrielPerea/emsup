<?php 
if(!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

class Imprimir {

	function impri(&$bean, $event, $arguments){
		
	

		echo "hola mundo";

		$GLOBALS["log"]->fatal("se imprimio");
		

	}

}

?>