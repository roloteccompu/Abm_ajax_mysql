
 
<script src="js/funcionRegistrar.js"></script>

    
   <form  id="formulario" class=" col-xs-12 col-sm-10 col-md-8  pull-left form-group formIngreso" method="post"   enctype="multipart/form-data" action="" onsubmit="Registrar()">
        <h2 class="form-ingreso-heading ">Alta</h2>
       
        <input type="text" id="name" name="name" autofocus=""  required="" class="form-control" minlength="6" maxlength="30" placeholder="ingrese nombre"  value="">

        <input type="email" id="correo" name="correo" class="form-control"  required=""  maxlength="30"  placeholder="ingrese correo" value="">

        <input type="password" id="password" name="password" minlength="6" maxlength="12" required=""  class="form-control" placeholder="contraseña" value="" >
    
        <label for="">seleccionar foto</label>
        <output id="list"></output>
        <input type="file" id="files" name="imagen"  required="" accept="image/*" >
        
        <input type="hidden" id="queHacer" name="queHacer" value="registrar">
         <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
        
    </form>
        
    
   



