<?php

class Caneta
{
    public $cor;
    public $ponta;
    protected $tampada;

    public function rabiscar()
    {
        if(!$this->tampada){
            echo "Estou rabiscando ....";
        } else{
            echo "A caneta está tempada, destampe e rabisque";
        }
        
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function destampar()
    {
        $this->tampada = false;
    }
}