<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}else
if($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
}


require_once("../clases/AccesoDatos.php");

require_once("../clases/users.php");

if(isset($_POST["parametro"]))
{
	$parametro=json_decode(json_encode($_POST["parametro"]));
}
var_dump($parametro);

$existe=false;
$recordarme=$parametro->recordarme;


$user=new user();

$arrayUsuarios=$user::TraerTodosLosUsuarios();

	foreach ($arrayUsuarios as $usuario) {
		if (($usuario->name==$parametro->name )&& ($usuario->password==$parametro->password)) {
			
			$existe=true;

			
			if ($recordarme) {
			   setcookie("registro",$usuario->password,  time()+36000 , '/');
			}
			else{

			   setcookie("registro",$usuario->password,  time()-36000 , '/');
			 }
			 	$_SESSION['registrado']=$parametro->name;
		}
	}
	
	return $existe;
?>
<?php
  ?>
