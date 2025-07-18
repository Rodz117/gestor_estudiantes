<?php
require_once "includes/Estudiante.php";
require_once "includes/EstudiantePresencial.php";
require_once "includes/EstudianteEnLinea.php";
require_once "includes/GestorEstudiantes.php";
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php include "includes/navbar.php"; ?>
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
<script>
    document.getElementById("buscador").addEventListener("input", function () {
        const filtro = this.value.toLowerCase();
        const elementos = document.querySelectorAll(".estudiante-item");
        elementos.forEach(function (item) {
            const texto = item.textContent.toLowerCase();
            item.style.display = texto.includes(filtro) ? "" : "none";
        });
    });
</script>
</body>
</html>