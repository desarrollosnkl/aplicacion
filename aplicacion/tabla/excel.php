<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM tabla");
$stm -> execute();
$tabla = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
        
     <th scope="col">Cliente</th>
     <th scope="col">Rif</th>
     <th scope="col">Direccion</th>
     <th scope="col">fecha de V.</th>
 
    </tr>
  </thead>
  <tbody>


  <?php foreach($tabla as $tablas){ ?>
    <tr>
    <td scope="row"><?php echo $tablas['cliente']; ?></td>
    <td><?php echo $tablas['rif']; ?></td>
     <td><?php echo $tablas['direccion']; ?></td>
     <td><?php echo $tablas['fecha']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>