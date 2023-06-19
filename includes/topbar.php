<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- links boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <!--Fontawesome-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen">
<link rel="stylesheet" href="assets/css/animate-css/animate.min.css" media="screen">
<link rel="stylesheet" href="assets/css/lobipanel/lobipanel.min.css" media="screen">
<link rel="stylesheet" href="assets/css/toastr/toastr.min.css" media="screen">
<link rel="stylesheet" href="assets/css/icheck/skins/line/blue.css">
<link rel="stylesheet" href="assets/css/icheck/skins/line/red.css">
<link rel="stylesheet" href="assets/css/icheck/skins/line/green.css">
<link rel="stylesheet" href="assets/css/main.css" media="screen">
<link rel="stylesheet" href="assets/css/prism/prism.css" media="screen">

<!-- <link rel="stylesheet" type="text/css" href="assets/js/DataTables/datatables.min.css"/> -->
<script src="assets/js/modernizr/modernizr.min.js"></script>

</head>



<body>
    
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #689ECD;">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema de Notas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fa fa-home"></i> Inicio</a>
        </li>


    <!-- Primer tarea AÑOS ESCOLARES -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            Años Escolares
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="manage-classes.php"><i class="fa fa-bars"></i> Gestionar Años</a></li>
            <li><a class="dropdown-item" href="create-class.php"><i class="fa fa-plus"></i> Crear Años</a></li>
            </ul>
        </li>
        <!-- Fin primer tarea -->

        <!-- Segunda tarea MATERIAS -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-book" aria-hidden="true"></i>
            Materias
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="manage-subjects.php"><i class="fa fa-bars"></i> Lista Materias</a></li>
            <li><a class="dropdown-item" href="manage-subjectcombination.php"><i class="fa fa-bars"></i> Ver Relación de Materias</a></li>
            <li><a class="dropdown-item" href="create-subject.php"><i class="fa fa-plus"></i> Crear Materias</a></li>
            <li><a class="dropdown-item" href="add-subjectcombination.php"><i class="fa fa-plus"></i> Gestionar Relación Materias</a></li>
            </ul>
        </li>
        <!-- Fin segunda tarea -->

        <!-- Tercera tarea -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-users" aria-hidden="true"></i>
            Estudiantes
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="manage-students.php"><i class="fa fa-bars"></i> Lista Estudiantes</a></li>
            <li><a class="dropdown-item" href="add-students.php"><i class="fa fa-plus"></i> Agregar Estudiantes</a></li>
            </ul>
        </li>
        <!-- Fin Tercera tarea -->

        <!-- Cuarta tarea -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-calculator" aria-hidden="true"></i>
            Promediar Notas
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="promedio.php"><i class="fa fa-bars"></i> Promediar</a></li>
            </ul>
        </li>
        <!-- Fin Cuarta tarea -->

        <!-- Quinta tarea -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-file-o" aria-hidden="true"></i>
            Resultados
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="buscar-resultado.php"><i class="fa fa-plus"></i> Consultar Resultados Estudiante</a></li>
            <li><a class="dropdown-item" href="add-result.php"><i class="fa fa-plus"></i> Agregar Resultado</a></li>
            <li><a class="dropdown-item" href="manage-results.php"><i class="fa fa-bars"></i> Editar Resultados</a></li>
            </ul>
        </li>
        <!-- Fin Quinta tarea -->

        <!-- Sexta tarea -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="change-password.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-key"  href="change-password.php" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="change-password.php"><i class="fa fa-key"></i> Cambiar Contraseña </a></li>
            </ul>
        </li>
        <!-- Fin sexta tarea -->

        
        
        </ul>
        <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">



<!-- Cerrar sesion -->
<li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i></a></li>



</ul>
    </div>
    </div>
</nav>
<!-- Fin Navbar -->
    
</body>
</html>