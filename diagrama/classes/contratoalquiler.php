<?php
class ContratoAlquiler {
    private $fechaInicio;
    private $fechaFin;
    private $precioDia;
    private $vehiculo;
    private $cliente;


    public function __construct($fechaInicio, $fechaFin, $precioDia, $vehiculo, $cliente) {
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->precioDia = $precioDia;
        $this->vehiculo = $vehiculo;
        $this->cliente = $cliente;
    }


    public function getFechaInicio() {
        return $this->fechaInicio;
    }


    public function getFechaFin() {
        return $this->fechaFin;
    }


    public function getPrecioDia() {
        return $this->precioDia;
    }


    public function getVehiculo() {
        return $this->vehiculo;
    }


    public function getCliente() {
        return $this->cliente;
    }


    public function nDias() {
        $fechaInicio = new DateTime($this->fechaInicio);
        $fechaFin = new DateTime($this->fechaFin);
        $interval = $fechaFin->diff($fechaInicio);
        return $interval->days;
    }


    public function costeTotal() {
        $nDias = $this->nDias();
        return $nDias * $this->precioDia;
    }
}

$fechaInicio = '01-05-2024';
$fechaFin = '10-05-2024';
$precioDia = 100;

$contrato = new ContratoAlquiler($fechaInicio, $fechaFin, $precioDia, $coche, $class);
echo "<h2>Factura</h2>";
echo "<strong>Fecha del Inicio:</strong> " . $contrato->getFechaInicio() . "<br>";
echo "<strong>Fecha del Fin:</strong> " . $contrato->getFechaFin() . "<br>";
echo "<strong>Precio por Dia:</strong> " . $contrato->getPrecioDia() . "<br>";
echo "<strong>Días:</strong> " . $contrato->nDias() . "<br>";
echo "<strong>Total:</strong> " . $contrato->costeTotal() . "<br>";
?>