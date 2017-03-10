
<?php
require_once("../clases/AccesoDatos.php");
require_once("../clases/users.php");

//move_upload_file(filename,destination);


 $mensaje="default";

   $id=$_POST['id'];
   $nombre=$_POST['name'];
   $correo=$_POST['correo']; 
   $password=$_POST['password'];
   $fotoPrevia=$_POST['fotoPrevia'];
   
  
   if ($_FILES["imagen"]["name"] =="") 
   {
   			
   		$imagen = $fotoPrevia;
   		$ruta = $imagen;
   		
   		move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

   		$usuario=new user();
   		$usuario->id=$id;
		$usuario->name=$nombre;
		$usuario->password=$password;
		$usuario->correo=$correo;
		$usuario->imagen=$imagen;
				
		$mensaje=$usuario->InsertarUsuario();
	}
	
	else  
		if($_FILES['imagen']['name'] ==="image/jpg" || $_FILES['imagen']['type']==="image/jpeg" || $_FILES['imagen']['type']==="image/png") 
		{

			$imagen = uniqid()."-".$_FILES["imagen"]["name"];
			$ruta = "../imagenes/".$imagen;
			
				if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta))
				{
						
					$usuario=new user();
					$usuario->id=$id;
					$usuario->name=$nombre;
					$usuario->password=$password;
					$usuario->correo=$correo;
					$usuario->imagen="imagenes/".$imagen;
					
					$mensaje=$usuario->InsertarUsuario();
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