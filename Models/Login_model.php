<?php

/**
* 
*/
class Login_model extends Conexion
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function validar($col, $where){

		return $this->db->select1($col, 'user', $where);
	}
}