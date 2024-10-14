<?php
    class Pessoa{
    public $nome; 
    public $idade; 
    public $altura; 
    public $peso; 

    public function __construct($nome, $idade, $altura, $peso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;

        $this->setNome($nome);
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function getPeso(){
            return $this->peso;
        }


        public function Andar (){
            echo $this->nome . " Andou";
        }
        public function Falar (){
            echo $this->nome . " Falou";
        }
        public function Comer (){
            echo $this->nome . " Comeu";
        }
        public function Dormir (){
            echo $this->nome . " Dormiu";
        }
    }

    $pedro = new Pessoa ("Pedro Lucas", 17, 1.73, 45);
    // echo $pedro -> getNome();
    $pedro->Dormir();
?>