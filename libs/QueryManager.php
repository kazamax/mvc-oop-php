<?php

/**
* 
*/
class QueryManager 
{
	private $conexion;
	function __construct($HOST, $USER, $PASS, $NAME)
	{
		$this->conexion = new Mysqli($HOST, $USER, $PASS, $NAME);
		if ($this->conexion->connect_errno) {
			echo 'No se pudo conectar a la db :'.$this->conexion->connect_error;
		}
	}

	public function select1($col, $table, $where){

		$sql = "SELECT ".$col. " FROM ".$table. " WHERE ".$where.";";
		$result = $this->conexion->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$response[] = $row;
			}
			return $response;
		}
	}
}