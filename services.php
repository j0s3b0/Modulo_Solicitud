<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Area de servicio y matenimiento</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">	Bienvenido al servicio y mantenimiento!!</p>
        <p class="pull-right"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
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
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" width="400px" height="50px"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Inicio</a></li> 
							 <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Seleccione<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="habitacion.html">Habitaciones</a></li>
                        </ul>
                    </li> 
						<li class="active"><a href="services.html">Servicio</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Services</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">		
        <!-- Service Blcoks -->
			
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Servicio</h3>
									<p>Aqui podremos procesar las solicitudes de servicios, peticiones de reparacion, y mantenimiento  o alguna peticion que pueden tener nuestros clientes o el administrador del sistema. </p>
								</div>  
							</div>
						</div>
						    <!-- Info Blcoks -->

<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript">
  function mostrar(id) {
      switch(id){
        case'nada':
            $("#uno").hide();
            $("#dos").hide();
            $("#tres").hide();

            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();
        break;

        case'1':
            $("#uno").show();
            $("#dos").hide();
            $("#tres").hide();
            $("#cuatro").hide();
            $("#cinco").hide();

            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();


        break;

        case'2':
            $("#dos").show();
            $("#uno").hide();
            $("#tres").hide();
            $("#cuatro").hide();
            $("#cinco").hide();

            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();


        break;

            case'3':
            $("#tres").show();
            $("#uno").hide();
            $("#dos").hide();
            $("#cuatro").hide();
            $("#cinco").hide();

            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();
            break;
      }
  }
</script>


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


                    if (pg_num_rows($this->verificando)!=0) 
                    {  
                      
                    echo "<br><br>";
                   

                      while ($this->dato = pg_fetch_array($this->verificando))
                       { 
                          echo "nombre: ";
                          echo $this->dato['nombre'];
                          echo "<br>";
                          echo "apellido: ";
                          echo $this->dato['apellido'];
                          echo "<br>";
                          echo "cedula: ";
                          echo $this->dato['cedula'];
                          echo "<br>";
                        
                        
                         ?>
        <h4>Tipo de Servicio</h4>
        <div id="nada">        
        <select name="primero" id="pri" style="padding: 5px 40px" onChange="mostrar(this.value);"><center>
                                    <option value="nada">Seleciones</option>
                                    <option value="2">Reparacion</option>
                                    <option value="3">Mantenimiento</option>

        </select></center>
        </div>
        <form name='for_reparacion' method='post' action='reparacion.php'>

            <div id="dos" hidden>
            <h4>Reparacion</h4>
            <select name="segundo" style="padding: 5px 40px" id="seg">
                <option value="1">Televisor</option>
                <option value="2">Bombillo</option>
                <option value="3">Enchufe</option>
                <option value="4">Cocina</option>
                <option value="5">Aire</option>
                <option value="6">Tuberias</option>
                <option value="7">Cableado</option>
                <option value="8">Moviliario</option>
            </select>
            </div>
            <br>
           <?php echo "<input type='hidden' value=".$this->dato['id_persona']." name='id'>"; ?>
                                             <input type='submit' value='Reparacion' style="padding: 6px 40px" class='btn btn-primary'>
        </form>
        <br>
        <form name='for_mantenimiento' method='post' action='mantenimiento.php'>

            <div id="tres" hidden>
            <h4>Mantenimiento</h4>
            <select name="tercero" style="padding: 5px 40px" id="ter">
                <option value="1">Bar</option>
                <option value="2">Psicina</option>
                <option value="3">Recepcion</option>
                <option value="4">Pasillo</option>
                <option value="5">Ventana</option>
            </select>
            </div>
            <br>
                       <?php echo "<input type='hidden' value=".$this->dato['id_persona']." name='id'>"; ?>
                       <input type='submit' value='Mantenimiento' style="padding: 6px 40px" class='btn btn-primary'>
                   </form>
              
                         <?php
                          echo "<form name='for_reparacion' method='post' action='reparacion.php'>

                          <input type='hidden' value=".$this->dato['id_persona']." name='id'></form>
                          ";?>


                         <?php
                          echo "<form name='for_mantenimiento' method='post' action='mantenimiento.php'>

                          <input type='hidden' value=".$this->dato['id_persona']." name='id'></form>
                          ";
                      
                       
                       }
                
                    }

                else{
                       
                         echo '<script>alert("la cedula no esta registrada");</script>';
                         echo '<script>history.back(1);<script>';
             }

             }
          }
          $cedula = $_REQUEST['cedula'];
          $leer_datos = new cliente($cedula);
          $leer_datos->leer();
     ?>
		<center>
		<br>
		<br>
        <!-- End Info Blcoks -->
        <!-- End Service Blcoks -->  
    </div>
    </section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Bootstrap company Inc</strong><br>
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
					<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
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