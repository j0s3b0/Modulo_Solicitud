<?php  
//Llamamos la clase de la base de datos.
//require_once "bd/conexion.php";
//require_once "controller/Logincontroller.php";
//index.php?c=Login&a=index


//c = el controlador a utilizar a = el metodo a utilizar;
$controller = 'home';

//FontController. 
//require_once 'controllers/requestController.php';
//require_once 'controllers/requestController.php';

if (!isset($_REQUEST['c'])) {
	require_once "controllers/$controller"."Controller.php";
	
		//$controller = ucwords($controller) ."controller";
 		$controller = $controller."Controller";
 		//var_dump($controller);
 		$controller = new $controller;
 		$controller->index();
}
	else{
		$method = $_REQUEST['a'];
		$controller = $_REQUEST['c'];
		require_once "controllers/$controller"."Controller.php";
		$controller = $controller."Controller";
		$controller = new $controller;
		//$controller->$method;
		call_user_func(array($controller, $method));
		}
/*1)Solicitud-->login1.html-->empleado.php
2)Requerimiento-->login-->habitacion1.php
3)Asignacion de tecnico-->services.html--->services.php
------//------------------------------------------------
Mi proyecto: 

1)Controlador de solicitud.
*/
?>