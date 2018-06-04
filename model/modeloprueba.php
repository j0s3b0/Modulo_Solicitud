<?php 
	class modelRequest{
		private $model; 

		public function __construct(){
			$this->BD = conectar::setConnection();//Conexion;
			$this->request = array();
		}

		public function insert($fecha,$departamento,$tipoEquipo,$falla,$observacion){
			$sql = ("INSERT INTO solicitud(id_empleado, status, "fechaIngreso", id_equipo, "tecnicoAsignado_id", "fechaAceptacion", falla_id, observacion)
    			VALUES (3, 2, FALSE, '2018-11-01', 2, 
            			1, '1/12/2015', 2, 'nada');")
		}

	}

 ?>