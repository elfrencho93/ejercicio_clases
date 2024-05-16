<?php
class Moto extends Vehiculo {
    private $cc;


    public function __construct($matricula, $marca, $modelo, $cc) {
        parent::__construct($matricula, $marca, $modelo);
        $this->cc = $cc;
    }


    public function getCc() {
        return $this->cc;
    }
}

$moto = new Moto('IB0000DK', 'Vespa', 'Primavera', 125);
echo "<h2>Moto</h2>";
echo "<strong>Matricula:</strong> " . $moto->getMatricula() . "<br>";
echo "<strong>Marca:</strong> " . $moto->getMarca() . "<br>";
echo "<strong>Modelo:</strong> " . $moto->getModelo() . "<br>";
echo "<strong>Potencia:</strong> " . $moto->getCc() . "cc<hr>";

?>