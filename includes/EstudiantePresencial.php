<?php
require_once "Estudiante.php";

class EstudiantePresencial extends Estudiante {
    private $salon;

    public function __construct($nombre, $edad, $matricula, $salon) {
        parent::__construct($nombre, $edad, $matricula);
        $this->salon = $salon;
    }

    public function mostrarInformacion() {
        echo "<strong>Presencial:</strong> ";
        parent::mostrarInformacion();
        echo " | Salón: {$this->salon}";
    }
}