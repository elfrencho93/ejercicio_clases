<?php
class Cliente {
    private $nif;
    private $nombre;


    public function __construct($nif, $nombre) {
        $this->nif = $nif;
        $this->nombre = $nombre;
    }


    public function getNif() {
        return $this->nif;
    }


    public function getNombre() {
        return $this->nombre;
    }
}

$class = new Cliente('12345678Z', 'Ghost Johnson');
echo "<h2>Cliente</h2>";
echo "<strong>NIF:</strong> ". $class->getNif() . "<br>";
echo "<strong>Nombre:</strong> ". $class->getNombre() . "<hr>";
?>