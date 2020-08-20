<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($c)
    {
        $this->numConta = $c;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($d)
    {
        $this->dono = $d;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function abrirConta()
    {
        
    }

    public function fecharConta()
    {
        if($this->saldo > 0){
            echo "Conta com dinheiro";
        }else if($this->saldo < 0){
            echo "Conta em débito";
        }else{
            setStatus(false);
        }
    }

    public function depositar($valor)
    {
        if($this->status == true){
            $this->saldo + $valor;
        }
    }

    public function sacar($valor)
    {
        if($this->saldo >= $valor && $this->status == true){
            $this->saldo - $valor;
        }
    }

    public function pagarMensal()
    {
        
    }

}
