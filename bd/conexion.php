<?php  
class conectar{
  //atributos
  
  //metodos
	public static function setConnection(){
  	$conexion=pg_connect("host='localhost' dbname=solicitudProyecto port=5432 user = postgres password = admin") or die ("error de conexion".pg_last_error());
  	return $conexion;

	}
}

?>