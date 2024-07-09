
    <?php

    class Pessoa
    {

        /* Atribuitos */
        private $nome;
        private $idade;
        private $sexo;

        /* Metodo Construct */
        public function __construct($nome1, $idade2, $sexo3)
        {

            $this->nome = $nome1;
            $this->idade = $idade2;
            $this->sexo = $sexo3;
        }

        /* Getters e Setters  */

        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }
        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function getSexo()
        {
            return $this->sexo;
        }
        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }


        /* Metodos */
        public function fazerAniver()
        {
            $this->idade++;

            echo "Parabens ", $this->getNome(), ", hoje é o seu aniversario, voce esta completando ", $this->getIdade(), " de anos de idade.";
        }
    }


    ?>
