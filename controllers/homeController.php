<?php  

	class HomeController{

		public function index(){
			
			$title ="Bienvenido";
			//Header
			require_once 'views/header.php';
			//La vista que nos de la gana :V.
			require_once 'views/section.php';
			//Footer
			require_once 'views/footer.php';
		}

	}
	
?>