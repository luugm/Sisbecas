<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sistema de becas</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="css/timeline.css">
    </head>
<body>
<!-- partial:index.partial.html -->
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">SISBECASGT</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Inicio</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Perfil">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-user-circle"></i>
            <span class="nav-link-text">Perfil</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li title="Expediente">
              <a href="cpexp.php">Expediente</a>
            </li>
            <li title="Tutor">
              <a href="cptutor.php">Tutor</a>
            </li>
            <li title="Configuración">
              <a href="cpconfig.php">Configuración</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Becas">
          <a class="nav-link" href="becas.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Becas</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Catálogos">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponent" data-parent="#exampleAccordion">
            <i class="fa fa-book"></i>
            <span class="nav-link-text">Catálogos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponent">
            <li title="Ubicación">
              <a href="catUbicacion.php">Ubicación</a>
            </li>
            <li title="Tipo de becas">
              <a href="catTibecas.php">Tipo de becas</a>
            </li>
            <li title="Seguros">
              <a href="catSeguros.php">Seguros</a>
            </li>
            <li title="Finanzas">
              <a href="catFinanzas.php">Finanzas</a>
            </li>
          </ul>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Solicitud">
          <a class="nav-link" href="solicitud.php">
            <i class="fa fa-check-square-o"></i>
            <span class="nav-link-text">Solicitud</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Asignación">
          <a class="nav-link" href="asignacion.php">
            <i class="fa fa-user-circle"></i>
            <span class="nav-link-text">Asignación</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cerrar sesión">
          <a class="nav-link" href="../index.php">
            <i class="fa fa-power-off"></i>
            <span class="nav-link-text">Cerrar Sesión</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">SISBECASGT</a>
        </li>
        <li class="breadcrumb-item active">Inicio</li>
      </ol>
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-home"></i> Bienvenida</div>
        <div class="card-body">
        <!-- INICIO TIMELINE -->
            <h1>Bienvenido a nuestro <span>sistema</span></h1>

<div class="container">

   <div class="timeline-block timeline-block-right">
      <div class="marker"></div>
      <div class="timeline-content">
         <h3>Primeros pasos</h3>
         <span>Configura tu perfil</span>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
      </div>
   </div>

   <div class="timeline-block timeline-block-left">
      <div class="marker"></div>
      <div class="timeline-content">
         <h3>Solicita tu beca</h3>
         <span>Sigue el progreso de tu solicitud</span>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
      </div>
   </div>

   <div class="timeline-block timeline-block-right">
      <div class="marker"></div>
      <div class="timeline-content">
         <h3>Asignación</h3>
         <span>Al haber sido aprobado</span>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
      </div>
   </div>
</div>
        <!--FIN TIMELINE-->
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SISBECASGT 2020</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>
</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js'></script>
<script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap4.js'></script><script  src="./script.js"></script>

</body>
</html>
