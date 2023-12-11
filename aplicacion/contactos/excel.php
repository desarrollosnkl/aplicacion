<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM contactos");
$stm -> execute();
$contactos = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
     <th scope="col">Cliente</th>
     <th scope="col">Rif</th>
     <th scope="col">Direccion</th>
     <th scope="col">fecha de V.</th>
     <th scope="col">Condicion</th>
    
    </tr>
  </thead>
  <tbody>


  <?php foreach($contactos as $contacto){ ?>
    <tr>
    <td scope="row"><?php echo $contacto['cliente']; ?></td>
    <td><?php echo $contacto['rif']; ?></td>
     <td><?php echo $contacto['direccion']; ?></td>
     <td><?php echo $contacto['fecha']; ?></td>
     <td><?php echo $contacto['condicion']; ?></td>  
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>
