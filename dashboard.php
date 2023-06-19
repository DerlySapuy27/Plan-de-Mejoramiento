<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
?>


    <?php include('includes/topbar.php'); ?>
    <div class="content-wrapper">
        <div class="content-container">

            <div class="main-page">

                <!-- /.container-fluid -->

                <section class="section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                <a class="dashboard-stat bg-white" href="add-students.php">
                            <!-- Targeta -->
                            <div class="card" style="width: 18rem;">
                            <img src="./assets/images/estudiante.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text" >Agregar Estudiante.</p>
                            </div>
                            </div>
                            <!-- Fin tarjeta -->
                                </a>
                                <!-- /.dashboard-stat -->
                            </div>   


                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                            <a class="dashboard-stat bg-white" href="create-subject.php">
                            <!-- Targeta -->
                            <div class="card" style="width: 18rem;">
                            <img src="./assets/images/materia.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text" >Registrar Materia.</p>
                            </div>
                            </div>
                            <!-- Fin tarjeta -->
                                </a>
                                <!-- /.dashboard-stat -->
                            </div>


                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-white" href="promedio.php">
                            <!-- Targeta -->
                            <div class="card" style="width: 18rem;">
                            <img src="./assets/images/calculadora.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text" >Promediar Notas.</p>
                            </div>
                            </div>
                            <!-- Fin tarjeta -->
                                </a>
                                <!-- /.dashboard-stat -->
                            </div>


                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                <a class="dashboard-stat bg-white" href="buscar-resultado.php">
                            <!-- Targeta -->
                            <div class="card" style="width: 18rem;">
                            <img src="./assets/images/resultados.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text" >Resultados.</p>
                            </div>
                            </div>
                            <!-- Fin tarjeta -->
                                </a>
                                <!-- /.dashboard-stat -->
                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                        </div>
                    <!-- /.panel -->
            </div>
            <!-- /.col-md-6 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    </section>

    <!-- Segunda seccion -->
    <section class="section">
                    <div class="container-fluid">
                        <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                <a class="dashboard-stat bg-white" href="manage-students.php">
                            <!-- Targeta -->
                            <div class="card" style="width: 18rem;">
                            <img src="./assets/images/estudiante2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text" >Lista de estudiantes.</p>
                            </div>
                            </div>
                            <!-- Fin tarjeta -->
                                </a>
                                <!-- /.dashboard-stat -->
                            </div> 


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                <a class="dashboard-stat bg-white" href="manage-classes.php">
                            <!-- Targeta -->
                            <div class="card" style="width: 18rem;">
                            <img src="./assets/images/años.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text" >Lista Años Escolares.</p>
                            </div>
                            </div>
                            <!-- Fin tarjeta -->
                                </a>
                                <!-- /.dashboard-stat -->
                            </div> 

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                <a class="dashboard-stat bg-white" href="manage-classes.php">
                            <!-- Targeta -->
                            <div class="card" style="width: 18rem;">
                            <img src="./assets/images/lista1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text" >Agregar Año Escolar.</p>
                            </div>
                            </div>
                            <!-- Fin tarjeta -->
                                </a>
                                <!-- /.dashboard-stat -->
                            </div> 

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                <a class="dashboard-stat bg-white" href="manage-classes.php">
                            <!-- Targeta -->
                            <div class="card" style="width: 18rem;">
                            <img src="./assets/images/mat.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text" >Relación Materia-Años.</p>
                            </div>
                            </div>
                            <!-- Fin tarjeta -->
                                </a>
                                <!-- /.dashboard-stat -->
                            </div> 




                        </div>
                        </div>
                        </section>

    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.section -->


    
    </div>
    <!-- /.main-page -->


    </div>
    <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('includes/footer.php'); ?>



<?php } ?>