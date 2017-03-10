<?php
class user
{
	public $id;
 	public $name;
  	public $correo;
  	public $password;
  	public $imagen;


	 public function AltaUsuario()
	 {

		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT  into users(name,password,correo,imagen)values('$this->name','$this->password','$this->correo','$this->imagen')");
				
		$consulta->execute();
		
		return "di de alta el usuario";
	 }

  	public function BorrarUsuario($id)
	 {

	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from users 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$id, PDO::PARAM_INT);		
				$consulta->execute();
				 return "borre el usuario";
	 }

	public function InsertarUsuario()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update users 
				set name='$this->name',
				password='$this->password',
				correo='$this->correo',
				imagen='$this->imagen'
				WHERE id='$this->id'");
			 $consulta->execute();
			 return "inserté el usuario";

	 }
	
  	public static function TraerTodosLosUsuarios()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select *from users");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "user");	
				
	}

	public static function TraerUnUsuario($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,name,password,correo,imagen from users where  id = :id");
			$consulta->bindValue(':id',$id,PDO::PARAM_INT);
			$consulta->execute();
			$usuarioBuscado= $consulta->fetchObject('user');
			
			return $usuarioBuscado;
		
	}

	
	
}