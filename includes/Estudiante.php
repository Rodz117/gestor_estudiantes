<?php
class Estudiante {
    protected $nombre;
    protected $edad;
    protected $matricula;

    public function __construct($nombre, $edad, $matricula) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->matricula = $matricula;
    }

    public function mostrarInformacion() {
        echo "Nombre: {$this->nombre} | Edad: {$this->edad} | Matrícula: {$this->matricula}";
    }

    public function getMatricula() {
        return $this->matricula;
    }
}
?>