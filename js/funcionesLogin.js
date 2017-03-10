//  parametros de una consulta por post AJAX jquery
// $.post(url(obligatorio),parametros(opcional),funcion(opcional),tipodeDatoDevuelto(opcional))


// $(function(){ //FUNCION ANONIMA SOLO SE EJECUTRA LLAMANDO A LOS EVENTOS
// //		CAPTURO EVENTO CLICK DEL ID INGRESAR
// 		

			//FORMA CONCISA DE EJECUTAR UNA CONSULTA POR JQUERY ABAJO FORMA EXTENSA
//   		$('#ingresar').click(function(e){  //e es el evento que se ejecuta
			
// 			var parametro=new Object();
// 			parametro.queHacer="mostrarFormLogin";
		
// 				$.post("nexo.php",{parametro:parametro},function(respuesta){
// 					$('#principal').html('respuesta del servidor: '+ respuesta);
// 				},'html').fail(function(error){
// 					$('#informe').html('error del servidor: '+ error);
// 				});
// 		});

// });

//FUNCION LOGRO OTRA FORMA DE HACER LO DE ARRIBA 


function ValidarLogin(){


	var parametro=new Object();
		parametro.name=$('#name').val();
		parametro.password=$('#password').val();
		parametro.recordarme=$('#recordarme').val();
		$('#pagina').remove();
        $.ajax({
            type: 'POST',
            url: 'php/validarUsuario.php',
            data:{parametro:parametro},
            success: function(retorno){
        		
        		if(retorno)
        		   MostrarPaginaSesion();
        		 else
        		 	alert("usuario o contraseña incorrecta");
        		  
            }        
       }).fail(function(retorno){	
			console.log(retorno.responseText);	
		});	
        

}

function MostrarPaginaSesion(){
		
		
	var funcionAjax=$.ajax({
		url:"forms/formSesionIniciada.php",
		type:"post",
		success: function(retorno){
        		
        	$("#pagina").html(retorno);
        } 
	
	});
	 
	
}
function Deslogearme(){

	var funcionAjax=$.ajax({
		url:"php/desloguearUsuario.php",
		type:"post"
	
	}).done(function(retorno){
		
		MostrarPaginaSesion();
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	

}
