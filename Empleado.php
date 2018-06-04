<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Acura Multi purpose Free HTML5 website Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" />
<!-- Vendor Styles -->
<link href="css/magnific-popup.css" rel="stylesheet"> 
<!-- Block Styles -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/gallery-1.css" rel="stylesheet">
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<form action="Empleado.php" method="post" accept-charset="utf-8">
</head>
<body>
<div id="wrapper">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Solicitud de Reparacion</p>
      
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
                        
                        </li> 
                        <li class="active"><a href="Empleado.html">Empleado</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
			</div>
		</div>
	</div>
	</section>

                  <h3><center>Por Favor Ingrese Su solicitud</center></h3>
    <br>
    <br>
    <div class="container" style="float:left; position:relative; left:13%;">
    <table>
      <tr>
      <tr><td><h4>Numero de Ticket</h4></tr></td>
      <td><input type "text" name="cedula" placeholder="SVTHP-123 - - - - - - -"></td>
      </tr>
    </table>
    </div>

    <div style="float:left; position:absolute; left:33%;">
    <table>
    <tr>
      <tr><td><h4>Fecha de Emision</h4></tr></td>
      <td><input name="fecha" type="text" id="fecha" value="<?php echo date("m/d/Y"); ?>" size="10"  readonly="readonly" /></td>
    </tr>
    </table>
    </div>

    <div style="float:left; position:absolute; left:53%;">
    <table>
    <tr>
      <tr><td><h4>Supervisor</h4></tr></td>
      <td><input type "text" name="supervisor"></td>
    </tr>
    </table>
    </div>

    <div style="float:left; position:absolute; left:73%;">
    <table>
    <tr>
      <tr><td><h4>Departamento</h4></tr></td>
      <td><select name="departamento" style="width: 150px;  height:30px;">
                <option value="nada">Seleciones</option>
                <option value="1">Contabilidad</option>
                <option value="2">Administracion</option>
                <option value="3">Tecnologia</option>
                <option value="4">Marketing</option>
                <option value="5">Registro</option>
                <option value="6">RRHH</option></td>
    </select>
    </tr>
    </table>
    </div>
    <br><br><br><br>
    
    <div style=" padding-left: 160px; width: 250px; position:absolute;">
    <table>
    <tr>
      <tr><td><h4>Piso</h4></tr></td>
      <td><select name="piso" style="width: 150px;  height:30px;">
                <option value="nada">Seleciones</option>
                <option value="1">Piso1</option>
                <option value="2">Piso2</option>
                <option value="3">Piso3</option></td>
    </select>
    </tr>
    </table>
    </div>

    <div style="width: 250px; position:absolute; left:33%;">
    <table>
    <tr>
      <tr><td><h4>Equipo</h4></tr></td>
      <td><select name="equipos" style="width: 150px;  height:30px;">
                <option value="nada">Seleciones</option>
                <option value="1">Computadora</option>
                <option value="2">Teclado</option>
                <option value="2">Impresora</option>
                <option value="3">Fax</option></td>
    </select>
    </tr>
    </table>
    </div>

    <div style="width: 250px; position:absolute; left:53%;">
    <table>
    <tr>
      <tr><td><h4>Tipos de Fallas</h4></tr></td>
      <td><select name="fallas" style="width: 150px;  height:30px;">
                <option value="nada">Seleciones</option>
                <option value="1">No enciende</option>
                <option value="2">No ejecuta accion</option>
                <option value="3">Pantalla congelada</option>
                <option value="4">Intermitencia</option>
                <option value="5">Sonido extraño</option>
                <option value="6">Olor extraño</option>
                <option value="7">Boton con fallas</option></td>
    </select>
    </tr>
    </table>
    </div>

    <div style="width: 300px; position:absolute; left:73%;">
    <table>
    <tr>
      <tr><td><h4>Instalacion</h4></tr></td>
      <td><select name="instalacion" style="width: 150px;  height:30px;">
                <option value="nada">Seleciones</option>
                <option value="1">Cableado</option>
                <option value="2">Reubicacion</option>
                <option value="3">Accesorios</option>
                <option value="4">Revision</option></td>
    </select>
    </tr>
    </table>
    </div>
    <br>

    <div style=" padding-left: 370px; left:250px;">
    <table>
      <tr>
      <tr><td><h4>Observacion</h4></tr></td>
      <td><textarea name="comentarios" rows="5" cols="70" placeholder= "Observacion del Usuario con respecto a la falla"></textarea></td>
      </tr>
    <br><br><br><br>
    </table>
    </div>

        <br>
        <center><input type="submit" value="Enviar"></center>
        <br><br><br><br>
        <br><br><br><br>
      </form>

<!--Llamado de librerias -->
<script type="text/javascript" src="http://localhost/Proyecto-BD-ADS/js/jquery-2.1.4.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<script src="jquery-2.1.4.min.js"></script>
<script src="js/js.js"></script>
	
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
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
 
</body>
</html>