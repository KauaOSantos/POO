<?php 

abstract class Veiculo {
    abstract public function Acelerar();
    abstract public function Frear();
}

    class Carro extends Veiculo {
        public function Acelerar(){
            echo "Pisar no pedal de acelerador";
    }
    public function Frear(){
        echo "Pisar no pedal do freio";
    }
}

class Barco extends Veiculo {
    public function Acelerar(){
        echo "Empurrar o Manete";
    }
    public function Frear(){
        echo "Puxar o Manete";
    }
}

class Bicicleta extends Veiculo {
    public function Acelerar(){
        echo "Pedalando";
    }
    public function Frear(){
        echo "Apertar a manete de freio";
    }
}      

class Skate extends Veiculo {
    public function Acelerar(){
        echo "Remar com os pés";
    }
    public function Frear(){
        echo "Pisar na Borda traseira";
    }
}      

class Moto extends Veiculo {
    public function Acelerar(){
        echo "Girar a Manopla";
    }
    public function Frear(){
        echo "Pisar no pedal de freio e apertar a manete de freio";
    }
}      

class Elevador extends Veiculo {
    public function Acelerar(){
        echo "Seleciona o andar";
    }
    public function Frear(){
        echo "Apertar a parada de emergência";
    }
}    


$carro = new Carro();
var_dump($carro);
$carro->Acelerar();
$carro->Frear();
echo "<hr>";

$barco = new Barco();
var_dump($barco);
$barco->Acelerar();
$barco->Frear();
echo "<hr>";

$bicicleta = new Bicicleta();
var_dump($bicicleta);
$bicicleta->Acelerar();
$bicicleta->Frear();
echo "<hr>";

$skate = new Skate();
var_dump($skate);
$skate->Acelerar();
$skate->Frear();
echo "<hr>";

$moto = new Moto();
var_dump($moto);
$moto->Acelerar();
$moto->Frear();
echo "<hr>";

$elevador = new Elevador();
var_dump($elevador);
$elevador->Acelerar();
$elevador->Frear();
echo "<hr>";