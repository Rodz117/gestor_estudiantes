<?php
require_once "Estudiante.php";
require_once "GestorEstudiantes.php";
session_start();
if (!isset($_SESSION['gestor'])) {
    $_SESSION['gestor'] = new GestorEstudiantes();
}
include "includes/navbar.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Estudiante</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="container mt-5">
    <h3>Registrar Nuevo Estudiante</h3>
    <form action="procesar.php" method="post" class="row g-3 mt-3">
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
        <div class="col-md-2 d-grid">
            <label>&nbsp;</label>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>