<?php
require_once "includes/Estudiante.php";
require_once "includes/EstudianteEnLinea.php";
require_once "includes/EstudiantePresencial.php";
require_once "includes/GestorEstudiantes.php";
session_start();

if (!isset($_SESSION['gestor'])) {
    $_SESSION['gestor'] = new GestorEstudiantes();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php include "includes/navbar.php"; ?>
<div class="container mt-5">
    <h3>Registrar Nuevo Estudiante</h3>
    <form action="procesar.php" method="post" class="row g-3">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="col-md-2">
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label for="matricula" class="form-label">Matrícula:</label>
            <input type="text" name="matricula" id="matricula" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label for="tipo" class="form-label">Tipo:</label>
            <select name="tipo" id="tipo" class="form-select" required>
                <option value="Presencial">Presencial</option>
                <option value="EnLinea">En Línea</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="salon" class="form-label">Salón o Plataforma:</label>
            <input type="text" name="salon" id="salon" class="form-control" placeholder="Ej. Aula 1 o Zoom">
        </div>
        <div class="col-md-4 d-grid">
            <label>&nbsp;</label>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
</body>
</html>