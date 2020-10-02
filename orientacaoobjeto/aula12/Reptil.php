<?php
require_once "Animal.php";
class Reptil extends Animal
{
    private $corEscama;

    public function locomover()
    {
        echo "<p>Rastejando</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo Vegetais</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de reptil</p>";
    }

    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}