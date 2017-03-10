
<?php
require_once("../clases/AccesoDatos.php");
require_once("../clases/users.php");
//move_upload_file(filename,destination);
//  $mensaje=$_POST['queHacer'];
// echo "entro agregarUsuario.php".$mensaje;

 $mensaje="default";


// 	# code...

   $nombre=$_POST['name'];
   $correo=$_POST['correo']; 
   $password=$_POST['password'];
   
  
   if ($_FILES["imagen"]["name"] =="") 
   {
   			
   		$imagen = "computadora.jpg";
   		$ruta = "../imagenes/".$imagen;
   		
   		move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
   		$usuario=new user();
		$usuario->name=$nombre;
		$usuario->password=$password;
		$usuario->correo=$correo;
		$usuario->imagen="imagenes/".$imagen;
				
		$mensaje=$usuario->AltaUsuario();
	}
	
	else  
		if($_FILES['imagen']['name'] ==="image/jpg" || $_FILES['imagen']['type']==="image/jpeg" || $_FILES['imagen']['type']==="image/png") 
		{

			$imagen = uniqid()."-".$_FILES["imagen"]["name"];
			$ruta = "../imagenes/".$imagen;
			
				if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta))
				{
						
					$usuario=new user();
					$usuario->name=$nombre;
					$usuario->password=$password;
					$usuario->correo=$correo;
					$usuario->imagen="imagenes/".$imagen;
					
					$mensaje=$usuario->AltaUsuario();
				}
				else{
					$mensaje="No se pudo subir el archivo";
				}
		}
		else
		{
			$mensaje="La extension del archivo no es permitido";
	}// else if
		

echo $mensaje;
?>