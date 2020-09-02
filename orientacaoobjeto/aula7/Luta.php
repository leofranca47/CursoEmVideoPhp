<?php
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __constuct($desafiado, $desafiante, $rounds, $aprovada)
    {
        setDesafiado($desafiado);
        setDesafiante($desafiante);
        setRounds($rounds);
        setAprovada($aprovada);
    }

    public function getDesfiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }

    public function marcarLuta()
    {
        
    }

    public function lutar()
    {
        
    }
}