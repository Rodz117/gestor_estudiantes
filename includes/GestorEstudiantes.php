<?php
require_once "EstudiantePresencial.php";
require_once "EstudianteEnLinea.php";

class GestorEstudiantes {
    private $listaEstudiantes = [];

    public function agregarEstudiante($estudiante) {
        $this->listaEstudiantes[] = $estudiante;
    }

    public function obtenerLista() {
        return $this->listaEstudiantes;
    }

    public function buscarPorMatricula($matricula) {
        foreach ($this->listaEstudiantes as $e) {
            if (method_exists($e, 'getMatricula') && $e->getMatricula() === $matricula) {
                return $e;
            }
        }
        return null;
    }
}
?>