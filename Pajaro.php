<?php
require_once "Animal.php";

class Pajaro extends Animal {
    public function emitirSonido() {
        return "Pío!";
    }

    public function accionEspecifica() {
        return "Está volando.";
    }
}
?>
