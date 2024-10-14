<?php
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