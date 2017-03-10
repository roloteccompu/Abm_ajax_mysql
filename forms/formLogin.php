
<?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(isset($_SESSION['registrado'])){  ?>
    
 
            <form   class=" col-xs-12 col-sm-10 col-md-8  pull-right form-group formIngreso"  action="">
               
              <?php   echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>"; ?>
               <button onclick="Deslogearme()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
            </form>
      
  <?php }else{  ?>         
    
     
              <form   class=" col-xs-12 col-sm-10 col-md-8  pull-right form-group formIngreso" onsubmit="ValidarLogin()"  action="">
                <h2 class="form-ingreso-heading">Login</h2>
               
                <input type="text" id="name" class="form-control" placeholder="usuario" value="Rolando"  >
                <input type="password" id="password" minlength="4" class="form-control" placeholder="contraseña" value="1234567890">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="recordarme" name="recordarme" checked> Recordarme
                  </label>
                    

                </div>
                 <p>usuario:Rolando</p>
                    <p>contraseña:123456789</p>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                 <button class="btn btn-lg btn-primary btn-block" type="button" onclick="MostrarFormRegistro()" >registrarme</button>
            </form>         
       
  <?php  }  ?>
    
  


