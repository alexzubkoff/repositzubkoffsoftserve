<?php

class Hamster extends FluffyPets {

    public function toString() {
        return get_class($this) . "=> color: " . $this->color . "; price: "
                . $this->price . ";is_fluffy: " . $this->is_fluffy . ";<br/>";
    }

}
