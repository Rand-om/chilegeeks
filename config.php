<?php

class Coneccion {

	public static function con(){

		$mysqli = new mysqli("localhost", "root", "", "chilegeeks");
		if($mysqli){
			return $mysqli;
		}else{
			echo $mysqli->error;
		}

	}

}

?>