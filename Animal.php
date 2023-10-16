<?php
class Animal {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function emitirSonido() {
        return "Este animal hace un sonido.";
    }

    public function accionEspecifica() {
        return "";
    }

    // Método para imprimir la información en la tabla
    public function imprimirFila() {
        echo "<tr>";
        echo "<td>{$this->nombre}</td>";
        echo "<td>{$this->edad}</td>";
        echo "<td>{$this->emitirSonido()}</td>";
        echo "<td>{$this->accionEspecifica()}</td>";
        echo "</tr>";
    }
}
?>
