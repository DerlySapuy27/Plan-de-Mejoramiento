<?php
session_start();
include('includes/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $studentId = $_POST['StudentId'];
    $classId = $_POST['classId'];
    $subjectId = $_POST['subjectId'];
    $marks = $_POST['marks'];

    // Insertar los datos en la tabla tblresults
    $sql = "INSERT INTO tblresult (StudentId, ClassId, SubjectId, marks) VALUES (:StudentId, :classId, :subjectId, :marks)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':StudentId', $studentId, PDO::PARAM_INT);
    $query->bindParam(':classId', $classId, PDO::PARAM_INT);
    $query->bindParam(':subjectId', $subjectId, PDO::PARAM_INT);
    $query->bindParam(':marks', $marks, PDO::PARAM_STR);
    $query->execute();

    // Redirigir nuevamente al formulario
    header('Location: promedio.php');
    exit;
}
?>






