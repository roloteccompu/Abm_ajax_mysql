<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

require_once("clases/AccesoDatos.php");

require_once("clases/users.php");

if(isset($_POST["parametro"]))
{

	$parametro=json_decode(json_encode($_POST["parametro"]));
}

$queHago=isset($parametro->queHacer)?$parametro->queHacer:$_POST['queHacer'];

switch ($queHago) {

							//	OPCIONES DE LOGUEO
						
	case 'borrarUsuario':	$claseUsuario=new user();
							$claseUsuario->BorrarUsuario($parametro->id);

							break;
	case 'insertarUsuario': $claseUsuario=new user();
							$claseUsuario->ModificarUsuario($parametro); 
							break;
	default:
							# code...
							break;
}



 ?>
