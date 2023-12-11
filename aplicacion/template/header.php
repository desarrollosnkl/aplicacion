<?php  

$url_base ="http://localhost/aplicacion/";

?>


<!doctype html>
<html lang="es">

<head>
  <title>DESARROLLOS°NKL°</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>
<body>

<nav style="background: navy;" class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $url_base; ?>">DESARROLLOS°NKL°</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?php echo $url_base; ?>contactos">Tabla de Registro</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $url_base; ?>tabla">Declaracion Patrimonial</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $url_base; ?>Calendario">Calendario</a>
        </li>
       
    </div>
    <a class="btn btn-danger text-white right" href="../../aplicacion/validar/login.php" role="button">Cerrar session</a>
  </div>
</nav>


<main class="ccontenedor p-3">