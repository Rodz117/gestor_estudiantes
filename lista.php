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
  <title>Lista de Estudiantes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="container mt-5">
    <h3>Lista de Estudiantes Registrados</h3>
    <input type="text" id="buscador" class="form-control mb-3" placeholder="Buscar estudiante por nombre o matrícula...">
    <ul class="list-group" id="lista-estudiantes">
    <?php
    $lista = $_SESSION['gestor']->obtenerLista();
    if (empty($lista)) {
        echo "<li class='list-group-item'>No hay estudiantes aún.</li>";
    } else {
        foreach ($lista as $e) {
            echo "<li class='list-group-item estudiante-item'>";
            $e->mostrarInformacion();
            echo "</li>";
        }
    }
    ?>
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById("buscador").addEventListener("input", function () {
        const filtro = this.value.toLowerCase();
        document.querySelectorAll(".estudiante-item").forEach(item => {
            const texto = item.textContent.toLowerCase();
            item.style.display = texto.includes(filtro) ? "" : "none";
        });
    });
  </script>
</body>
</html>