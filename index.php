<?php

class Veiculo{
    public $marca; 
    public $modelo; 
    public $cor; 
    public $ano; 

    public function __construct($marca, $modelo, $cor, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function Ligar (){
        echo "Ligou";
    }
    
    public function Acelerar (){
        echo "Acelerou";
    }
    
    public function Frear (){
        echo "Freiou";
        }
}

    class Moto{
    public $marca; 
    public $modelo; 
    public $cor; 
    public $ano; 

    public function __construct($marca, $modelo, $cor, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function Ligar (){
        echo "Ligou";
    }
    
    public function Acelerar (){
        echo "Acelerou";
    }
    
    public function Frear (){
        echo "Freiou";
        }
  
    }
    class Carro{
        public $marca; 
        public $modelo; 
        public $cor; 
        public $ano; 
    
        public function __construct($marca, $modelo, $cor, $ano) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->ano = $ano;
    }
    
    public function Ligar (){
        echo "Ligou";
    }
    
    public function Acelerar (){
        echo "Acelerou";
    }
    
    public function Frear (){
        echo "Freiou";
        }
    }

    class Carro extends Veiculo{
    public function abrirPorta (){
        echo "Abrir Porta";
    }
}

    class Moto extends Veiculo{
    public function darGrau (){
        echo "Dar Grau";
    }
}

    $civic = new Carro ("Honda","Civic", "Azul", 2012);
    $titan = new Moto ("Honda","Titan 160", "Azul", 2024);

