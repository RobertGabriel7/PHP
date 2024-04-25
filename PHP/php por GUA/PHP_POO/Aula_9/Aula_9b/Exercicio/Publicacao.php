<?php 

/* A interface é a parte responsavel por permitir as interações sem que o usurario tenha contato direto com o código, como se fosse um teclado em que não é possivel ver a placa mãe, os compenentes internos, mas é possivel clicar nas teclas sem saber como isso funciona internamente. */


interface Publicacao{
    /* Metodos da interface */
    public function abrir($n1);
    public function fechar();
    public function folhear();
    public function avancarPagina();
    public function voltarPagina();
}

?>


