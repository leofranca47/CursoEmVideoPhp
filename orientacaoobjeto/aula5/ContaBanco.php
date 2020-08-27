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

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        } else if($t == "CP"){
            $this->setSaldo(150);
        }
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
            $this->saldo += $valor;
        } else{
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }
    }

    public function sacar($valor)
    {
        if($this->saldo >= $valor && $this->status == true){
            $this->saldo -= $valor;
        }
    }

    public function pagarMensal()
    {
        if($this->getTipo() == "CC"){
            $v = 12;
        } else if($this->getTipo() == "CP"){
            $v = 20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        } else{
            echo "<p>Problemas com a conta. Não posso cobrar";
        }
    }

}
