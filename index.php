<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Programacion && Más byRolo</title>

	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/misEstilos.css">

	<link rel="icon" href="rolo.ico">
	
	
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Shadows+Into+Light" rel="stylesheet">
	
	
	
	<script src="jquery/jquery-1.11.2.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script src="js/funcionesABM.js"></script>
	<script src="js/funcionesLogin.js"></script>
	<script src="js/funcionRegistrar.js"></script>

	
</head>
<body >


<div  id="pagina" >
	<header >
	 	<nav class="navbar  navbar-inverse navbar-static-top" >
	 		<div class=" container-fluid">
	 		<h2 class="titulo"></h2>
			<!-- tengo que poner opciones -->
				<ul class="pull-right list-inline">
					<li ><a class="btn boton" href="https://www.udacity.com/">Cursos de Google</a></li>
					<li ><a class="btn boton" href="http://getbootstrap.com/">Bootstrap</a></li>
			
	
					
				</ul>
	 		</div>
	 	</nav>
	</header>
	
	<section  class="jumbotron jumbotron-sc">
	 	<div  class="container ">
	 		<div class="col-xs-12 col-sm-6  titulos">
		 		
		 		<h1 class="titulo">ABM de Usuarios</h1>
		 		<p class="titulo ">by Rolo</p>
		 		
			</div>


	    <div id="formLogin" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
			
		<?php 

			$status = session_status();
			if($status == PHP_SESSION_NONE){
			    //There is no active session
			    session_start();
			}

			if(isset($_SESSION['registrado'])){  ?>
    

				<form   class=" col-xs-12 col-sm-10 col-md-8  pull-right form-group formIngreso"  action="">
               
        <?php   
        			echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>"; 
        ?>
              		 <button onclick="Deslogearme()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
           		</form>

  		<?php }
  			
  			else{  
  		?>         
		
				 <form   class=" col-xs-12 col-sm-10 col-md-8  pull-right form-group formIngreso" onsubmit="ValidarLogin()" action="">
	                <h2 class="form-ingreso-heading">Login</h2>
	               
	                <input type="text" id="name" class="form-control" placeholder="usuario" value=""  >
	                <input type="password" id="password" minlength="4" class="form-control" placeholder="contraseña" value="">
	                <div class="checkbox">
	                  <label>
	                    <input type="checkbox" id="recordarme" name="recordarme" checked> Recordarme
	                  </label>
	                    
	                </div>
	                 <p>usuario:Rolando</p>
                    <p>contraseña:123456789</p>
	                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
	                 <button class="btn btn-lg btn-primary btn-block" type="button" onclick="MostrarFormRegistro()" >registrarme</button>
	                 
	            </form>
         
       
  		<?php  }  
  		?>
    
	        </div>

       </div>
	</section> <!-- fin jumbotrom -->

	<div >
		<h1 class="titulo2">Aplicacion hecha con bootstrap,Ajax y MySql RESPONSIVE</h1>			
	 </div>

	<section class="main container">
	 			
	 	<div id="menu">
	<?php 

			if(isset($_SESSION['registrado'])){  
	?>			<nav class="navbar menu " >
					<a onclick="MostrarGrilla()" class="btn boton btn-default">Grilla</a>
					<a onclick="Deslogearme()" class="btn boton btn-default">Desloguearme</a>
					<a onclick="MostrarFormRegistro()" class="btn boton btn-default">+agregar Usuario</a>
				</nav>
				
   	<?php		}
   		
     //Si no esta seteada la session no muestro nada
    ?>         
 
  		</div>
 		
	 	<div  id="principal" class=" post clearfix">
		
					<h3><!-- contenido Actualizable por ajax -->
					Esta Aplicacion es un ejemplo  basico que realiza alta baja y modificacion de usuarios
					,usando Ajax mysql, bootstrap ,sessiones </h3>
					<img class="col-xs-12 col-sm-10" src="imagenes/ajax.jpg" alt="">


	 	</div>
	
	 </section>



	 <footer class="container-fluid ">
	 
				
				<div class="">
					<ul class="list-inline " style="padding: 10px 10px;">
						
						<li><a  style="text-decoration:none;color:black; ">
							<img src="imagenes/rolando.jpg" alt="..." style="width:100px; height: 100px;">
							</a>
						</li>
						<li style="padding: 5px 5px;><p ">Rolando Paquillo Vega Estudiante de Programacion UTN Argentina</p>
						<a  class="btn btn-primary"  href="https://www.facebook.com/programmerVega" style="border-radius: 5px ;">facebook</a>
						</li>
					</div>
					
					
				</div>	
				
	 </footer>

</div> 
</body>
</html>