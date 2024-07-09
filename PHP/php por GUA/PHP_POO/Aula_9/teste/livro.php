<?php

require_once "pessoa.php";
require_once "interface.php";

class Livro implements Publication{
    
    /* Atributos */
    private $titulo;
    private $autor;
    private $totalDePaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;
      
    /* Metodo Construct */
    public function __construct($titulo1, $autor1, $totalDePaginas1, $paginaAtual1, $aberto1, $leitor1){
        
        $this->titulo = $titulo1;
        $this->autor = $autor1;
        $this->totalDePaginas = $totalDePaginas1;
        $this->paginaAtual = $paginaAtual1;
        $this->aberto = $aberto1;
        $this->leitor = $leitor1;

    }

    /* Getters and Setters */  

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo1){
        $this->titulo = $titulo1;
    }
    
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor1){
        $this->autor = $autor1;
    }
    
    public function getTotalDePaginas(){
        return $this->totalDePaginas;
    }
    public function setTotalDePaginas($totalDePaginas1){
        $this->totalDePaginas = $totalDePaginas1;
    }

    public function getPaginaAtual(){
        return $this->paginaAtual;
    }
    public function setPaginaAtual($paginaAtual1){
        $this->paginaAtual = $paginaAtual1;
    }

    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto1){
        $this->aberto = $aberto1;
    }

    public function getLeitor(){
        return $this->leitor;
    } 
    public function setLeitor($leitor1){
        $this->leitor = $leitor1;
    }

    /* Metodos */

    public function detalhes(){
        
        
        echo "<br>Nome do livro: ", $this->getTitulo(), "<br>Autor: ", $this->getAutor(), "<br>Quantidade de páginas: ", $this->getTotalDePaginas(),
        
        /* Nesse caso, eu estou acessando uma function( getNome da class Pessoa, em outro arquivo) atraves de uma variavel global dessa class chamada "Livro. Exemplo: $this->leitor->getNome() */
        '<br>Leitor: ', $this->leitor->getNome();

    }

    /* Metodos da Interface */

    public function abrir(){
        $this->aberto = true;
        echo "O livro foi aberto.";
    }

    public function fechar(){
        $this->aberto = false;
        echo "O livro foi fechado.";
    }

    public function folhear($p){
        $this->paginaAtual = $p;
        echo "O livro foi aberto na pagina ", $this->getPaginaAtual(),".";
    }
    
    public function avacarPagina(){
        $this->paginaAtual ++;
        echo "Pagina atual: ", $this->getPaginaAtual();
    }

    public function voltarPagina(){
        $this->paginaAtual --;
        echo "Pagina atual: ", $this->getPaginaAtual();
    }
}


?>