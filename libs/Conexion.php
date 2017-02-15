<?php

/**
* 
*/
class Conexion extends MainControllers
{
	
	function __construct()
	{
		$this->db = new QueryManager('localhost', 'root', '', 'mvc');
	}
}