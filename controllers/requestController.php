<?php  

//require_once 'model/Loginmodel.php';
require_once 'bd/conexion.php';
	class requestController{
		public $BD;

		public function __construct(){
			$this->BD = conectar::setConnection(); 
			//header("refresh:2;url=index.php?c=request&m=user");
			//MODELO A UTILIZAR;
		}

		public function index(){
			$title = 'Bienvenido';

			//Header
			//require_once 'views/headerUsuario.php';
			require_once 'views/header.php';
			//La vista que nos de la gana :V.
			require_once 'views/section.php';
			//Footer
			require_once 'views/footer.php';

		}

		public function user(){
			$id_persona = 
			$title = "Validacion de usuario";
			require_once 'views/header.php';

			require_once 'views/validacionEmpleado.php';

			require_once 'views/section.php';			
		}

		public function userValidation(){
		
			if (isset($_REQUEST['cedula'])) {
				$query=pg_query("SELECT persona.id_persona, persona.cedula FROM empleado
						INNER JOIN persona on empleado.persona_id = persona.id_persona ");
				
				while ($rows = pg_fetch_array($query)){
					if($rows['cedula'] == $_REQUEST['cedula']){
						echo "Si esta registrado";
						$this->request($rows['id_persona'])
					}else{
						echo "No esta registrado";
						header("refresh:2;url=index.php?c=userValidation&a=index");
					}

				}
			}

		}


		public function request($id){
			$title = 'Solicitud';
			$id_persona =$id; 
			require_once 'views/headerUsuario.php';

			require_once 'views/formularioSolicitud.php';

			require_once 'views/footer.php';
		}

	}
//$obj = new requestController();
//$obj ->user();
?>