		
<?php 
require_once("../clases/AccesoDatos.php");
require_once("../clases/users.php");

	$arrayUsuarios=user::TraerTodosLosUsuarios();
 ?>
  
  <table class=" miTabla col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
    	
    	<h4 class="titulo2">lista de usuarios</h4>
    	
    	<thead>
			<tr style>
				<th >Editar-Borrar</th>
				<th>nombre</th>
				<th class="ocultarte">correo</th>
				<th class="ocultarte">imagen</th>
			</tr>
		</thead>
		
		<tbody>
 <?php    	
 	 

		 foreach ($arrayUsuarios as $user) {
		
			echo
				"
					<tr class='fila' >
						
						<td class=' columna col-xs-3 ' ><button class='iconos' onclick='Editar($user->id)'><span class='glyphicon glyphicon-pencil  '></button>
						<button class='iconos' onclick='Borrar($user->id)'><span class='glyphicon glyphicon-trash'>&nbsp;</span> </button></td>
						<td class='col-xs-3'>$user->name</td>
					    <td class='ocultarte col-xs-3'>$user->correo</td>
					     <td class='ocultarte col-xs-3'><img style='width:70px;height:70px; border-radius:10px; padding:2px 2px;' src=$user->imagen></td></td>
					   
					</tr>  ";
		}	 
?>
	 	</tbody>
</table>
