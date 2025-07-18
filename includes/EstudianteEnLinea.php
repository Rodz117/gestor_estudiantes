<?php
require_once "Estudiante.php";

class EstudianteEnLinea extends Estudiante {
    private $plataforma;

    public function __construct($nombre, $edad, $matricula, $plataforma) {
        parent::__construct($nombre, $edad, $matricula);
        $this->plataforma = $plataforma;
    }

    public function mostrarInformacion() {
        echo "<strong>En Línea:</strong> ";
        parent::mostrarInformacion();
        echo " | Plataforma: {$this->plataforma}";
    }
}