<?php

include("../db.php");


if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $stm = $conexion -> prepare("SELECT * FROM contactos WHERE id=:txtid");
    $stm -> bindParam(":txtid",$txtid);
    $stm -> execute();
    
   $registro = $stm -> fetch(PDO::FETCH_LAZY);
   $cliente = $registro['cliente'];
   $rif = $registro['rif'];
   $direccion = $registro['direccion'];
   $fecha = $registro['fecha'];
   $condicion = $registro['condicion'];

}

if($_POST) {

$txtid = (isset($_POST['txtid'])?$_POST['txtid']:"");
$cliente = (isset($_POST['cliente'])?$_POST['cliente']:"");
$rif = (isset($_POST['rif'])?$_POST['rif']:"");
$direccion = (isset($_POST['direccion'])?$_POST['direccion']:"");
$fecha = (isset($_POST['fecha'])?$_POST['fecha']:"");
$condicion = (isset($_POST['condicion'])?$_POST['condicion']:"");

$stm = $conexion -> prepare("UPDATE contactos SET cliente=:cliente, rif=:rif, direccion=:direccion, fecha=:fecha, condicion=:condicion WHERE id=:txtid");

$stm -> bindParam(":cliente",$cliente);
$stm -> bindParam(":rif",$rif);
$stm -> bindParam(":direccion",$direccion);
$stm -> bindParam(":fecha",$fecha);
$stm -> bindParam(":condicion",$condicion);
$stm -> bindParam(":txtid",$txtid);

$stm -> execute();

header("location:index.php");

}


?>



<!doctype html>
<html lang="es
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DESARROLLOS°NKL°</title>
  </head>
  <body style="background: linear-gradient(to right, navy, #1d2c3f);">

 
  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                    <br><br><br>
                            
                    <h3 class="text-center text-white">Modificar Tabla:</h3>
                        
              <form action="" method="post">

             
               <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>" placeholder="ingrese su nombre">


              <label for="cliente" class="text-white">Cliente:</label>
               <input type="text" class="form-control" name="cliente" value="<?php echo $cliente; ?>" placeholder="ingrese su cliente">

               
              <label for="rif" class="text-white">Rif:</label>
               <input type="text" class="form-control" name="rif" value="<?php echo $rif; ?>" placeholder="ingrese su rif">

               
              <label for="direccion" class="text-white">Direccion:</label>
               <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>" placeholder="ingrese su direccion">

               
              <label for="fecha" class="text-white">Fecha:</label>
               <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" placeholder="ingrese su fecha">

               
              <label for="condicion" class="text-white">Condicion:</label>
               <input type="text" class="form-control" name="condicion" value="<?php echo $condicion; ?>" placeholder="ingrese su condicion">

             <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Actualizar</button>
              <a href="index.php" class="btn btn-danger">Cerrar</a>
   
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