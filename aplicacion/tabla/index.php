<?php   
include("../db.php");

//Conexion a la base de datos.

$stm = $conexion -> prepare("SELECT * FROM tabla");
$stm -> execute();
$tabla = $stm -> fetchAll(PDO::FETCH_ASSOC);

// eliminar de la tabla.

if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$stm = $conexion -> prepare("DELETE FROM tabla WHERE id=:txtid");
$stm -> bindParam(":txtid",$txtid);
$stm -> execute();

header("location:index.php");


}

?>





<?php include("../template/header.php"); ?>


<h1 style="color: brown;">DESARROLLOS<img src="../img/nkl.png" alt=""></h1>
<h2 style="color: brown;">Tabla de Registro Patrimonial:</h2>

<a class="btn btn-outline-primary" href="agregar.php">Nuevo Registro
<i class="bi bi-calendar-check"></i> 
</a>

<a class="btn btn-outline-success" href="excel.php">Excel
<i class='bx bxs-grid'></i> </a>
<br>
    
<br>
</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">
      <hr>
  </form>
<br>


<div class="table-responsive">
    <table class="table table-info table_id">
        <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th scope="col">Rif</th>
                <th scope="col">Direccion</th>
                <th scope="col">Fecha V.</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($tabla as $tablas) { ?>


            <tr class="">
                <td scope="row"><?php echo $tablas['id']; ?></td>
                <td><?php echo $tablas['cliente']; ?></td>
                <td><?php echo $tablas['rif']; ?></td>
                <td><?php echo $tablas['direccion']; ?></td>
                <td><?php echo $tablas['fecha']; ?></td>

<td>

<a class="btn btn-success text-white" href="editar.php?id=<?php echo $tablas['id']; ?>" role="button"><i class='bx bx-edit'></i></a>
<a class="btn btn-danger" href="javascript:borrar(<?php echo $tablas['id']; ?>);" role="button"><i class='bx bx-lock'></i></a>
</td>

            </tr>

            <?php } ?>

        </tbody>
    </table>
</div>

<script>

function borrar(id){

    Swal.fire({
  title: '¿Quieres eliminar el Registro?',
  showCancelButton: true,
  confirmButtonText: 'Si, Borrar',
}).then((result) => {
  if (result.isConfirmed) {

window.location = "index.php?id="+id;

  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})



}
</script>



<?php include("../template/footer.php"); ?>