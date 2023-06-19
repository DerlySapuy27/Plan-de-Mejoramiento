<?php
session_start();
//error_reporting(0);
include('includes/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<?php include('includes/topbar.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado Estudiante</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/icheck/skins/flat/blue.css">
    <link rel="stylesheet" href="assets/css/main.css" media="screen">
    <script src="assets/js/modernizr/modernizr.min.js"></script>
    <title>Formulario de Notas</title>
    
</head>
<body>
    <center><h2>Formulario de Promedio de Notas de Aprendices</h2></center>
    <div class="main-wrapper"><br>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel login-box" style="background: #3d86ed;">
                        <div class="panel-heading">
                        </div>
    <div class="panel-body p-20">
        <!-- Inicia formulario de Promedio -->
        <form action="guardarpromedio.php" method="post" class="admin-login">

                                        <!-- Campo de id aprendiz -->
                                        <div class="form-group">
                                    <label for="default" class="control-label">Nombre-Id del Estudiante</label>
                                    <select name="StudentId" class="form-control" id="default" required="required">
                                        <option value="">Selecciona Nombre/Id del Aprendiz</option>
                                        <?php $sql = "SELECT * from tblstudents";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {   ?>
                                                <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->StudentName); ?>&nbsp; ID-<?php echo htmlentities($result->StudentId); ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>


                                <!-- Campo del documento -->
                                <div class="form-group">
                                    <label for="default" class="control-label"> Documento Aprendiz</label>
                                    <select name="class" class="form-control" id="default" required="required">
                                        <option value="">Selecciona Documento del Aprendiz</option>
                                        <?php $sql = "SELECT * from tblstudents";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {   ?>
                                                <option value="<?php echo htmlentities($result->documento); ?>"><?php echo htmlentities($result->documento); ?>&nbsp;  </option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                                <!-- Campo año escolar -->

                                    <div class="form-group">
                                    <label for="default" class="control-label">Nombre Curso</label>
                                    <select name="classId" class="form-control" id="default" required="required">
                                        <option value="">Selecciona Tecnólogo que cursa</option>
                                        <?php $sql = "SELECT * from tblclasses";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {   ?>
                                                <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; FICHA-<?php echo htmlentities($result->Section); ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>

                                <!-- Campo materia -->

                                    <div class="form-group">
                                    <label for="default" class="control-label">Materia-Asignatura</label>
                                    <select name="subjectId" class="form-control" id="default" required="required">
                                        <option value="">Selecciona Materia a Promediar</option>
                                        <?php $sql = "SELECT * from tblsubjects";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {   ?>
                                                <option value="<?php echo htmlentities($result->id); ?>">ID-<?php echo htmlentities($result->id); ?>&nbsp;<?php echo htmlentities($result->SubjectName); ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>

                                <!-- Codigo JavaScript de calculo del promedio -->
                                <script>
                                    function cal() {

                                        var nota1 = parseFloat(document.getElementById('nota1').value);
                                        var nota2 = parseFloat(document.getElementById('nota2').value);
                                        var nota3 = parseFloat(document.getElementById('nota3').value);

                                        if (!isNaN(nota1) && !isNaN(nota2) && !isNaN(nota3)) {
                                        var promedio = (nota1 + nota2 + nota3) / 3;
                                        document.getElementById('marks').value = promedio.toFixed(2);
                                          return true; // Permite enviar el formulario
                                        } else {
                                        document.getElementById('marks').value = '';
                                          return false; // Evita enviar el formulario
                                        }
                                        }


                                </script>
                                
                                <!-- Campo de cuantas notas va a promediar -->
                                <div class="form-group">
                                <div class="row"><!-- Columna para los campos de las notas -->
                                <label for="cantidad_notas" class="control-label">Ingrese las notas a promediar</label>
                                <div class="col">
                                <input type="number" class="form-control" id="nota1" placeholder="Nota 1" autocomplete="off" name="nota1" required="required" oninput="cal()">
                                </div>
                                <div class="col">
                                <input type="number" class="form-control" id="nota2" placeholder="Nota 2" autocomplete="off" name="nota2" required="required" oninput="cal()">
                                </div>
                                <div class="col">
                                <input type="number" class="form-control" id="nota3" placeholder="Nota 3" autocomplete="off" name="nota3" required="required" oninput="cal()">
                                </div>
                                </div>
                                </div>

                                    
                                <!-- Campo Promedio-Resultado -->
                                <div class="form-group text-center">
                                <label for="" class="form-label">Promedio</label>
                                <div class="col-4 mx-auto">	
                                <input name="marks" type="number" class="form-control"  id="marks" readonly>


                                </div>
	


                                <!-- Boton de Guardar  -->
                                <div class="form-group mt-20">
                                <div class="text-center mx-auto">
                                <button type="submit" class="btn btn-rounded" 
                                                    style="color: #172541; 
                                                    background-color: white; 
                                                    border-radius: 25px; 
                                                    padding: 10px 20px;">Guardar</button>
                                <div class="clearfix"></div>
                                </div>
                                </div>





                            
                            </form><!-- Fin del Formulario -->
                            
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-md-6 col-md-offset-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /. -->

    </div>
    <!-- /.main-wrapper -->
    <br><br>

    <!-- ========== COMMON JS FILES ========== -->
    <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/pace/pace.min.js"></script>
    <script src="assets/js/lobipanel/lobipanel.min.js"></script>
    <script src="assets/js/iscroll/iscroll.js"></script>

    <!-- Script del promeio -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- ========== PAGE JS FILES ========== -->
    <script src="assets/js/icheck/icheck.min.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="assets/js/main.js"></script>
    <script>
        $(function() {
            $('input.flat-blue-style').iCheck({
                checkboxClass: 'icheckbox_flat-blue'
            });
        });
    </script>

    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>
</body>

</html>
<?php include('includes/footer.php'); ?>