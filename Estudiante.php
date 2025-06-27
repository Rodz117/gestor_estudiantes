<?php
class Estudiante {
    private $nombre;
    private $edad;
    private $matricula;

    public function __construct($nombre, $edad, $matricula) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->matricula = $matricula;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function mostrarInformacion() {
        echo "Nombre: {$this->nombre} | Edad: {$this->edad} | Matrícula: {$this->matricula}";
    }
}
?>