<?php
/* shift + alt + seta para baxio copia e coloca */
/* require_once carrega as informações de um outro arquivo aqui neste aqui uma vez (once) */
require_once "Publicacao.php";
require_once "Pessoa.php";

/* implements é a implementação dos metodos da interface Publicação */
class Livro implements Publicacao 
{

    /* Atributos */
    private $titulo;
    private $autor;
    private $totalDePaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;
    

    /* Método construtor */
    /* Esse método serve justamente para facilitar o preenchimento de dados, pois em uma unica linha é possivel colocar varias informations */
    /* E tbm essa function, como o proprio nome diz, __construct (construi) informações para criar um objeto */
    public function __construct($titulo1, $autor1, $totalDePaginas1, $leitor1)
    {
        $this->titulo = $titulo1;
        $this->autor = $autor1;
        $this->totalDePaginas = $totalDePaginas1;
        $this->leitor = $leitor1;
        $this->aberto = false;
        $this->paginaAtual = 0;
    }

    /* Métodos Getters e Setters*/
    /* Esses metodos serve para acessar os atribuitos que, por sua vez, são privados por segurança. */
    /* Então com esses metodos é possivel solicitar os valores dos atributos ou modificar os valores. */
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($tituloo)
    {
        $this->titulo = $tituloo;
    }

    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autorr)
    {
        $this->autor = $autorr;
    }

    public function getTotalDePaginas()
    {
        return $this->totalDePaginas;
    }
    public function SetotalDePaginas($totalDePaginass)
    {
        $this->totalDePaginas = $totalDePaginass;
    }

    public function getPaginaAtual()
    {
        return $this->paginaAtual;
    }
    public function setPaginaAtual($pagiatual)
    {
        $this->paginaAtual = $pagiatual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }
    public function setAberto($Abertoo)
    {
        $this->aberto = $Abertoo;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }
    /* Estou acessando valores de elementos de outra class */
    public function setLeitor($leitorr)
    {
        $this->leitor = $leitorr;
    }

    /* Métodos Especiais */
    /* Esses metodos serve para fazer alguma interação ou retorna alguma coisa */
    public function detalhesDoLivro()
    {

        echo "<br>Nome do livro: ", $this->getTitulo(), "<br>Autor: ", $this->getAutor(), "<br>Quantidade de páginas: ", $this->getTotalDePaginas(),
        
        /* Nesse caso, eu estou acessando uma function( getNome da class Pessoa, em outro arquivo) atraves de uma variavel global dessa class chamada "Livro. Exemplo: $this->leitor->getNome() */
        '<br>Leitor: ', $this->leitor->getNome();
    }

    public function abrir($n1)
    {
        if ($n1 > $this->getTotalDePaginas()) {
            
            echo "<br><strong>Erro</strong>, valor acima da quantidade de páginas do livro.";

        } else {

            if ($this->getAberto() == true) {
                echo "<br>O livro já está aberto na página ", $this->getPaginaAtual();
            } else {
                $this->setPaginaAtual($n1);
                $this->setAberto(true);
                echo "<br>O livro foi aberto e está na página ", $this->getPaginaAtual(), ".";
            }
        }
    }

    public function fechar()
    {
        if ($this->getPaginaAtual() == false) {
            echo "<br>O livro já está fechado. Você precisa abrir.";
        } else {
            echo "<br>O livro foi fechado.";
            $this->setPaginaAtual(false);
        }
    }

    public function folhear()
    {
        if ($this->getAberto() == false) {
            echo "<br>O livro está fechado";
        } else {
            /* Nessa function, quando folheamos um livro, não sabemos ao certo em qual pagina vai parar, então eu fiz esse código que me 
                devolve um numero aleatorio de 1 até a quantidade total de paginas do livro, por exemplo: 1 até 255.
            */
            /* a function rand(onde comça, até onde vai) retorna um numero aleatorio com base nesses intervalos (argumentos) */
            $pagiAlea = rand(1, $this->getTotalDePaginas());
            $this->setPaginaAtual($pagiAlea);
            echo "<br>Página atual: ", $this->getPaginaAtual();
        }
    }

    public function avancarPagina()
    {
        if ($this->getAberto() == false) {
            echo "<br>O livro está fechado";
        } else {
            $pag = $this->getPaginaAtual() + 1;
            $this->setPaginaAtual($pag);
            echo "<br>Página atual do livro ", $this->getPaginaAtual();
        }
    }

    public function voltarPagina()
    {
        if ($this->getAberto() == false) {
            echo "<br>O livro está fechado";
        } else {
            $pag = $this->getPaginaAtual() - 1;
            $this->setPaginaAtual($pag);
            echo "<br>Página atual do livro", $this->getPaginaAtual();
        }
    }
}
