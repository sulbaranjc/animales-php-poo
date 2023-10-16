<?php
require_once "Animal.php";

class Perro extends Animal {
    public function emitirSonido() {
        return "Guau!";
    }

    public function accionEspecifica() {
        return "Está ladrando.";
    }
}
?>
