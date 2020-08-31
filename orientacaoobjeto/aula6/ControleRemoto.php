<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
    private $volume;
    private $ligando;
    private $tocando;

    public function __construct(){
        $this->volume = 50;
        $this->ligando = false;
        $this->tocando = false;
    }

    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($volume){
        $this->volume = $volume;
    }

    private function getLigando(){
        return $this->ligando;
    }

    private function setLigando($ligando){
        $this->ligando = $ligando;
    }

    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    public function ligar(){
        $this->setLigando(true);
    }
    public function desligar(){
        $this->setLigando(false);
    }
    public function abrirMenu(){
        echo "<br>Está ligado? " . ($this->getLigando()?"SIM":"NÃO");
        echo "<br>Está tocando? " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for($i = 0; $i <= $this->getVolume(); $i += 10){
            echo "|";
        }
        echo "<br>";
    }
    public function fechaMenu(){
        echo "<br>Fechando Menu...";
    }
    public function maisVolume(){
        if($this->getLigando()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if($this->getLigando()){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo(){
        if($this->getLigando() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigando() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigando() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigando() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}