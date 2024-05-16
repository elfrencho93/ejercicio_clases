<?php
class Coche extends Vehiculo {
    private $puertas;
    private $plazas;


    public function __construct($matricula, $marca, $modelo, $puertas, $plazas) {
        parent::__construct($matricula, $marca, $modelo);
        $this->puertas = $puertas;
        $this->plazas = $plazas;
    }


    public function getPuertas() {
        return $this->puertas;
    }


    public function getPlazas() {
        return $this->plazas;
    }
}

$coche = new Coche('0000FRT', 'Ford', 'Fusion', 4, 5);
echo "<h2>Coche</h2>";
echo "<strong>Matricula:</strong> " . $coche->getMatricula() . "<br>";
echo "<strong>Marca:</strong> " . $coche->getMarca() . "<br>";
echo "<strong>Modelo:</strong> " . $coche->getModelo() . "<br>";
echo "<strong>Puertas:</strong> " . $coche->getPuertas() . "<br>";
echo "<strong>Plazas:</strong> " . $coche->getPlazas() . "<hr>";

?>