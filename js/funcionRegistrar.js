// var messagesRef = new Firebase('https://ejemploajax-2d3dc.firebaseio.com/');
 
//funcion que sirve para previsualizar la imagen cargada con input file

 $(document).ready(function(){
            
               function archivo(evt) {
               
                 var extensiones_permitidas = new Array(".gif", ".jpg", ".doc", ".pdf"); 
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
               }
             
              document.getElementById('files').addEventListener('change', archivo, false);
          });

function MostrarFormRegistro(){ 

	var funcionAjax=$.ajax({
		url:"forms/formAlta.php",
		type:"post",
	}).done(function(retorno){
		
		$("#principal").html(retorno);
	
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	 
}
function Registrar(){

	
	var formData=new FormData($("#formulario")[0]);
	
		var funcionAjax=$.ajax({
		url:"php/agregarUsuario.php",
		type:"post",
		data:formData,
		cache:false,
		processData:false,
		contentType:false,
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

