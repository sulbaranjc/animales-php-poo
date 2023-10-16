<?php
require_once "Animal.php";

class Gato extends Animal {
    public function emitirSonido() {
        return "Miau!";
    }

    public function accionEspecifica() {
        return "Está ronroneando.";
    }
}
?>
