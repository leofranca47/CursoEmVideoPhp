<?php
class Lutadores
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria()
    {
        if($this->getPeso() < 52.2){
            $this->categoria = "Inválido";
        } else if($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        } else if($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        } else if($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        } else{
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    public function apresentar()
    {
        echo "Lutador: " . $this->getNome();
        echo "<br>Origem: " . $this->getNacionalidade();
        echo "<br>". $this->getIdade() . " anos";
        echo "<br>" . $this->getAltura() . " m de altura";
        echo "<br>Pesando " . $this->getPeso() . "kg";
        echo "<br>Categoria: " . $this->getCategoria();
        echo "<br>Ganhou: " . $this->getVitorias();
        echo "<br>Perdeu: " . $this->getDerrotas();
        echo "<br>Empatou: " . $this->getEmpates();
    }

    public function status()
    {
        echo $this->getNome();
        echo "<br>é um peso " . $this->getCategoria();
        echo "<br>".$this->getVitorias() . " vitórias";
        echo "<br>".$this->getDerrotas() ." derrotas";
        echo "<br>" . $this->getEmpates() . " empates<br><br>";
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
}