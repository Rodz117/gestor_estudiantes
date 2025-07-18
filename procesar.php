<?php
require_once "includes/Estudiante.php";
require_once "includes/EstudiantePresencial.php";
require_once "includes/EstudianteEnLinea.php";
require_once "includes/GestorEstudiantes.php";

session_start();

if (!isset($_SESSION['gestor'])) {
    $_SESSION['gestor'] = new GestorEstudiantes();
}

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$matricula = $_POST['matricula'];
$tipo = $_POST['tipo'];
$salon = $_POST['salon'];

if ($tipo === "Presencial") {
    $estudiante = new EstudiantePresencial($nombre, $edad, $matricula, $salon);
} else {
    $estudiante = new EstudianteEnLinea($nombre, $edad, $matricula, $salon);
}

$_SESSION['gestor']->agregarEstudiante($estudiante);

header("Location: lista.php");
exit();