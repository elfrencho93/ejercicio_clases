<?php
class Vehiculo {
    private $matricula;
    private $marca;
    private $modelo;


    public function __construct($matricula, $marca, $modelo) {
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }


    public function getMatricula() {
        return $this->matricula;
    }


    public function getMarca() {
        return $this->marca;
    }


    public function getModelo() {
        return $this->modelo;
    }
}
?>