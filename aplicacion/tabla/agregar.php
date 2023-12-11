<?php 

$conexion= mysqli_connect("localhost", "root", "", "aplicacion");

if(isset($_POST['registrar'])){

    if(strlen($_POST['cliente']) 
    >=1 && strlen($_POST['rif']) 
    >=1 && strlen($_POST['direccion']) 
     >=1 && strlen($_POST['fecha'])>= 1) {

    $cliente = trim($_POST['cliente']);
    $rif= trim($_POST['rif']);
    $direccion = trim($_POST['direccion']);
    $fecha = trim($_POST['fecha']);

  
    $consulta= "INSERT INTO tabla (cliente, rif, direccion, fecha)
    VALUES ('$cliente', '$rif','$direccion','$fecha')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location:index.php');
  }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DESARROLLOS°NKL°</title>
  </head>
  <body style="background: linear-gradient(to right, #1d2c3f, navy);" >

  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br><br><br>
                          
                            <h3 class="text-center text-white">Registrar cliente:</h3>
                            <div class="form-group">

                            <label for="cliente" class="form-label text-white">Cliente:</label>
                            <input type="text"  id="cliente" name="cliente" class="form-control" placeholder="ingrese su cliente" required>
                            </div>

                            <div class="form-group">
                                <label for="rif" class="text-white">Rif:</label><br>
                                <input type="text" name="rif" id="rif" class="form-control" placeholder="ingrese su rif">
                            </div>
                        
                            <div class="form-group">
                            <div class="form-group">
                            <label for="direccion" class="text-white">Direccion:</label><br>
                                <input type="direccion" name="direccion" id="direccion" class="form-control" placeholder="ingrese su direccion" required>
                                 
                            </div>

                            <div class="form-group">
                                  <label for="fecha" class="form-label text-white">Fecha de vencimiento:</label>
                                <input type="date"  id="fecha" name="fecha" class="form-control" placeholder="ingrese su fecha" required>
                                
                            </div>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Agregar"class="btn btn-primary" 
                               name="registrar">
                               <a href="index.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>