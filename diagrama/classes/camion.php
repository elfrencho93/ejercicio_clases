<?php
class Camion extends Vehiculo {
    private $kg;


    public function __construct($matricula, $marca, $modelo, $kg) {
        parent::__construct($matricula, $marca, $modelo);
        $this->kg = $kg;
    }


    public function getKg() {
        return $this->kg;
    }
}

$camion = new Camion('M0000XL', 'Volvo', 'FH16', 44000);
echo "<h2>Camión</h2>";
echo "<strong>Matricula:</strong> " . $camion->getMatricula() . "<br>";
echo "<strong>Marca:</strong> " . $camion->getMarca() . "<br>";
echo "<strong>Modelo:</strong> " . $camion->getModelo() . "<br>";
echo "<strong>Peso:</strong> " . $camion->getKg() . " kg<hr>";
?>