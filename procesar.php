<?php
require_once "Estudiante.php";
require_once "GestorEstudiantes.php";
session_start();

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$matricula = $_POST['matricula'];

$estudiante = new Estudiante($nombre, $edad, $matricula);

if (!isset($_SESSION['gestor'])) {
    $_SESSION['gestor'] = new GestorEstudiantes();
}

$_SESSION['gestor']->agregarEstudiante($estudiante);

header("Location: index.php");
exit();
?>