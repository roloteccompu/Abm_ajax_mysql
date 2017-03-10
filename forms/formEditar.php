<?php
require_once("../clases/AccesoDatos.php");

require_once("../clases/users.php");

if(isset($_POST["parametro"]))
{

  $parametro=json_decode(json_encode($_POST["parametro"]));
}
$objetoUser=new user();
$user=$objetoUser::TraerUnUsuario($parametro->id);

 ?>

<?php

      echo " 
      <script src='js/funcionRegistrar.js'></script>


      <form  id='formulario'  method='post'   enctype='multipart/form-data' action='' onsubmit='Insertar()'>
        
        <h2 class='form-ingreso-heading''></h2>

        <input type='hidden' id='id' name='id'  class='form-control' value='$user->id' required='' autofocus='' >
        <label >ingrese nombre</label>
        <input type='text'    id='name' name='name'    class='form-control' value='$user->name' required='' autofocus='' >
        <input type='email'    id='correo' name='correo'    class='form-control' value='$user->correo' required='' autofocus='' >
        <input type='password'    id='password' name='password'    class='form-control' value='$user->password' required='' autofocus='' >
        
       <label >seleccionar foto</label>
       
        <output id='list'></output> 
        <input type='file' id='files' name='imagen'>
       
        <input type='hidden' id='fotoPrevia' name='fotoPrevia' value='$user->imagen'>

        <button class='btn btn-lg btn-primary btn-block' type='submit'>Insertar</button> 

        </form>";
?>
