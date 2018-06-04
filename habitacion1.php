<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Modulo de matenimiento</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Requerimientos de solicitud </p>
        <p class="pull-right"><i class="fa fa-phone"></i>Tel (1) 223-483-732</p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="index.html"><img src="img/logo.png" width="400px" height="50px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Inicio</a></li> 
							 <li class="dropdown active">
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Requerimientos</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
			
			<center>

 <?php

          class cliente
          {   
               private $host='localhost';
               private $port='5432';
               private $user='postgres';
               private $dbname='proyecto';
               private $password='0000';

               public $cedula;

               function __construct($cedula)
               {
                    $this->cedula=$cedula;
               } 

                function conectar() {

                  $this->conectar = pg_connect ("host=".$this->host." port=".$this->port." dbname=".$this->dbname." user=".$this->user." password=".$this->password) or     die('no se pudo conectar a la base de datos'.pg_last_error());
                                    }
          
               function leer()
               {         
                     $this->conectar();
                     $this->conectar;
                     $this->verificar_cedula = "SELECT id_persona, nombre, apellido, cedula
                     FROM persona
                     WHERE cedula=".$this->cedula;

                     $this->verificando = pg_query($this->verificar_cedula);
                   

                      while ($this->dato = pg_fetch_array($this->verificando))
                       { 
                          echo "<h4>Requerimientos de Ticket Presentado por</h4>";
                          echo "<h5>Emitido por el Asesor </h5>";
                          echo $this->dato['nombre'];
                          echo "<br><br>";

                          echo '<form action="habitacion.php" method="post" accept-charset="utf-8">
                                 <select name="piso" style="padding: 5px 40px" id="pis">
                                  <option value="1">Equipo</option>
                                  <option value="2">Piso 2</option>
                                  <option value="3">Piso 3</option>
                                  </select>
            </div>
            </center>
            <center>
            <select name="habitacion" style="padding: 5px 40px" id="hab">
                <option value="1">Herramientas</option>
                <option value="2">Destornillador</option>
                <option value="3">Ponchador</option>
                <option value="4">Tornillo</option>
                <option value="5"> </option>
                <option value="6"> </option>
                <option value="7"> </option>
                <option value="8"> </option>
                <option value="9"> </option>
                <option value="10"> </option>
                <option value="11"> </option>
                <option value="12"> </option>
            </select>
             <br> <br>

            <input type="submit" value="Enviar">
            <input type="hidden" name="id_persona" value='.$this->dato['id_persona'].'>

            <br>
          <br> 
          </form>';
        
                       
                       }
                
                    }

             }
          
          $cedula = $_REQUEST['cedula'];
          $leer_datos = new cliente($cedula);
          $leer_datos->leer();
     ?>

        <input type="button" value="Agrear a solicitud" onclick="agregar_solicitud" tabindex="10">
     

		
         	</center>
				<//img src="img/hab.png" style="width:250px; height:200px; margin-left: 700px"> 


				<div class="col-md-6">
					<div class="about-text">
						<h4>Informacion sobre Requerimientos</h4>
						<p>Se van a identificar todos los requerimientos necesarios para ejecutar la solicitud
              de forma safisfactoria y se agregaran las herramientas extra que pueda necesitar la solicitud.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Bootstrap Template 2017 All right reserved. Template By </span><a href="http://webthemez.com/free-bootstrap-templates/" target="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>