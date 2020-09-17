<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setPagAtual($pagAtual);
        $this->setAberto($aberto);
        $this->setLeitor($leitor);
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    public function detalhes()
    {
        echo "<br>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Páginas: " . $this->totPaginas . " atual: ". $this->getPagAtual();
        echo "<br>Sendo lido por " . $this->leitor->getNome();
    }

    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        } else{
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        if($this->pagAtual <= $this->totPaginas){
            $this->pagAtual ++;
        } else{
            $this->pagAtual = $this->totPaginas;
        }
        
    }
    public function voltarPag(){
        if($this->pagAtual <= 0){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual --;
        }
    }
}