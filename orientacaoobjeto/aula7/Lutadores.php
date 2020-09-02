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
        setNome($no);
        setNacionalidade($na);
        setIdade($id);
        setAltura($al);
        setPeso($pe);
        setVitorias($vi);
        setDerrotas($de);
        setEmpates($em);
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
        setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria()
    {
        if(getPeso() < 52.2){
            $this->categoria = "Inválido";
        } else if(getPeso() <= 70.3){
            $this->categoria = "Leve";
        } else if(getPeso() <= 83.9){
            $this->categoria = "Médio";
        } else if(getPeso() <= 120.2){
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
        echo "Lutador: " . getNome();
        echo "<br>Origem: " . getNacionalidade();
        echo "<br>". getIdade() . " anos";
        echo "<br>" . getAltura() . " m de altura";
        echo "<br>Pesando " . getPeso() . "kg";
        echo "<br>Categoria: " . getCategoria();
        echo "<br>Ganhou: " . getVitorias();
        echo "<br>Perdeu: " . getDerrotas();
        echo "<br>Empatou: " . getEmpates();
    }

    public function status()
    {
        
    }

    public function ganharLuta()
    {
        setVitorias(getVitorias() + 1);
    }

    public function perderLuta()
    {
        setDerrotas(getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        setEmpates(getEmpates() + 1);
    }
}