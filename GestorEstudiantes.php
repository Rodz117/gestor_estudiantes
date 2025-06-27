<?php
require_once "Estudiante.php";

class GestorEstudiantes {
    private $lista = [];

    public function agregarEstudiante(Estudiante $estudiante) {
        $this->lista[] = $estudiante;
    }

    public function obtenerLista() {
        return $this->lista;
    }
}
?>