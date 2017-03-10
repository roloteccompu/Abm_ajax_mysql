<?php 
 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(!isset($_SESSION['registrado'])){  ?>

  
  <?php }else{ 
     
     ?>         
	 	<nav class="navbar  " >
			 				<a onclick="MostrarGrilla()" class="btn boton btn-default">Grilla</a>
			 				<a onclick="Deslogearme()" class="btn boton btn-default">Desloguearme</a>
              <a onclick="MostrarFormRegistro()" class="btn boton btn-default">+Agregar Usuario</a>
			 		</nav>
 
  <?php  }  ?>
    
  
