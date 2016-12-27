<?php

class Coneccion {

	public static function con(){

		define("host","localhost");
		define("user","root");
		define("pass","");
		define("db","chilegeeks");

		$mysqli = new mysqli(host, user, pass, db);
		if($mysqli){
			return $mysqli;
		}else{
			echo $mysqli->error;
		}

	}

}

?>