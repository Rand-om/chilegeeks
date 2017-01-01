<?php

class Amigo {

	private $amigos = array();
	private $inf;


	public function buscar_amigos(){

		$con = Coneccion::con();

		$this->inf = $_POST["inf"];

		$sql = $con->query(
				"select * from 
					usuarios where 
					nombre like '%".$this->inf."%' 
					or 
					nick like '%".$this->inf."%'");

		if($sql->num_rows == 0){
			echo "No se encontraron resultados que coincidan con ".$this->inf." o ".$this->inf;
		}else{

			while($reg=$sql->fetch_array()){
				$this->amigos[] = $reg;
			}	
				return $this->amigos;
		}
		
	}

}

?>