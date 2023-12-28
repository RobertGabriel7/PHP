<?php
/*
$p = "Leite";
$pr = 5.50;
printf("o %s custa %.2f",$p,$pr);

*/
/*
$v[0] = 5;
$v[1] = 2;
$v[2] = 7;

print_r($v);
echo"<br>";
var_dump($v);
echo"<br>";
var_export($v);

*/

$r = "A Minha amada, Elisa, é maravilhosamente linda, incrivel, unica no meu coração, a flor mais bela e cheirosa que exite, uma mulher mais doce quanto mel e a mais exclusiva de todas!";

$e = wordwrap($r, 30,"<br>");

echo$e;

echo"<br>>>>>>>>>>>>>>>>><br>";

// Função printf(): Permite exibir uma string com itens formatados.
$numero = 42;
$nome = "João";
printf("O número é %d e o nome é %s.", $numero, $nome);

// Função print_r(): Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.
$array = array("a", "b", "c");
print_r($array);

// Função wordwrap(): Cria quebras de linha ou divisões em uma string em um tamanho especificado.
$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$textoFormatado = wordwrap($texto, 30, "<br>");

// Função strlen(): Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).
$tamanhoTexto = strlen($texto);

// Função trim(): Elimina espaços em branco antes e depois de uma string.
$stringComEspacos = "    Texto com espaços    ";
$stringSemEspacos = trim($stringComEspacos);

// Função ltrim(): Elimina espaços no início de uma string.
$stringSemEspacosInicio = ltrim($stringComEspacos);

// Função rtrim(): Elimina espaços em branco no final de uma string.
$stringSemEspacosFim = rtrim($stringComEspacos);

// Função str_word_count(): Conta quantas palavras uma string possui.
$frase = "Esta é uma frase de exemplo.";
$numeroPalavras = str_word_count($frase);

// Função explode(): Quebra uma string e coloca os itens em um vetor.
$data = "2023-01-01";
$dataArray = explode("-", $data);

// Função str_split(): Coloca cada letra de uma string em uma posição de um vetor.
$palavra = "abcdef";
$letras = str_split($palavra);

// Função implode(): Transforma um vetor inteiro em uma string.
$arrayDePalavras = array("Maçã", "Banana", "Pêra");
$stringDePalavras = implode(", ", $arrayDePalavras);

// Função chr(): Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
$caractereAscii = 65;
$caractere = chr($caractereAscii);

// Função ord(): Retorna o código ASCII de um caractere passado como parâmetro.
$codigoAscii = ord("A");


$p = "Carne";
$pr = 4.5;

/* Duas opções para mostrar  */
echo "O valor da $p custa R$ $pr.",number_format($pr,2);

/* printf() é mais legal */
printf ("<br><br>A %s custa R$ %.2f ", $p,$pr);

/* 
Função printf() : Permite exibir uma string com itens formatados.

Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.

Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado.

Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).

Função trim() : Elimina espaços em branco antes e depois de uma string.

Função ltrim() : Elimina espaços no início de uma string.

Função rtrim() : Elimina espaços em branco no final de uma string.

Função str_word_count() : Conta quantas palavras uma string possui.

Função explode() : Quebra uma string e coloca os itens em um vetor.

Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.

Função implode() : Transforma um vetor inteiro em uma string.

Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.

Função ord() : Retorna o código ASCII de um caractere passado como parâmetro.

 */



?>