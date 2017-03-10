
function MostrarGrilla()
{
	
	var funcionAjax=$.ajax({
		url:"forms/formGrilla.php",
		type:"post",
		}).done(function(retorno){
			
			$("#principal").html(retorno);
		});
		funcionAjax.fail(function(retorno){

		    alert(retorno);	
			$("#informe").html(retorno.responseText);	
		});

}
function Borrar($id)
{	
 event.preventDefault();
	var parametro=new Object();
		parametro.queHacer="borrarUsuario";
		parametro.id=$id;
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{parametro:parametro}
		});

		funcionAjax.done(function(retorno){
			MostrarGrilla();
			$("#informe").html('se borro el user');
		});
		funcionAjax.fail(function(retorno){	
			$("#informe").html(retorno.responseText);	
		});

}
function Editar($id){

	var parametro=new Object();
		parametro.id=$id;
		var funcionAjax=$.ajax({
		url:"forms/formEditar.php",
		type:"post",
		data:{parametro:parametro}
		}).done(function(retorno){
  			
			$('#principal').html(retorno);

			var imagen=$('#fotoPrevia').val();
			
			$("#list").append('<img class="thumb" id="cargarFoto" src="" />');

			$('#cargarFoto').attr("src", imagen);
			
		});
		funcionAjax.fail(function(retorno){	
			$("#informe").html(retorno.responseText);	
		});
		

}
function Insertar(){


	var formData=new FormData($("#formulario")[0]);
	
		var funcionAjax=$.ajax({
		url:"php/insertarUsuario.php",
		type:"post",
		data:formData,
		cache:false,
		processData:false,
		contentType:false
	});

	funcionAjax.done(function(retorno){
	
			MostrarGrilla();
		// var hola=window.location.href;
		// $("#informe").html(hola);	
	});
	funcionAjax.fail(function(retorno){	
		$("#principal").html(retorno.responseText);	
	});	
	
}