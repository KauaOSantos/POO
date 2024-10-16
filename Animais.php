<?php

//A astração funciona como um Funil que vai detalhando uma classe genérica com subclasses relacionadas a classe pai 
class Animal {
    public $nomeCientifico;
    public $esqueleto;
    public $habitat;
    public $alimentacao;

    public function __construct($nomeCientifico, $esqueleto, $habitat, $alimentacao) {
        $this->nomeCientifico = $nomeCientifico;
        $this->esqueleto = $esqueleto;
        $this->habitat = $habitat;
        $this->alimentacao = $alimentacao;
    }

    public function seMovimentar() {
        return "O animal se movimentou.";
    }

    public function getNomeCientifico() {
        return $this->nomeCientifico;
    }
}

class Vertebrado extends Animal {
    public function __construct($nomeCientifico, $esqueleto, $habitat, $alimentacao) {
        parent::__construct($nomeCientifico, $esqueleto, $habitat, $alimentacao);
    }
}

class Mamifero extends Vertebrado {
    public function amamentar() {
        return "O mamífero está amamentando.";
    }
}

class Ave extends Vertebrado {
    public function voar() {
        return "A ave está voando.";
    }
}

class Reptil extends Vertebrado {
    public function botarOvo() {
        return "O réptil está botando ovos.";
    }
}

class Peixe extends Vertebrado {
    public function nadar() {
        return "O Peixe está nadando.";
    }
}

class Ornitorrinco extends Mamifero {
    public function botarOvo() {
        return "O Ornitorrinco botou ovos.";
    }
}

class Morcego extends Mamifero {
    public function ecoar() {
        return "O Morcego está emitindo sons.";
    }
}

class Baleia extends Mamifero {
    public function cantar() {
        return "A Baleia está cantando.";
    }
}

$ornitorrinco = new Ornitorrinco("Nome científico: Ornithorhynchus anatinus", "Esqueleto de mamífero", "Rios e lagos", "Insetos e crustáceos");
echo $ornitorrinco->getNomeCientifico() . " - " . $ornitorrinco->botarOvo() . "<br> </br>";

$morcego = new Morcego("Nome científico: Chiroptera", "Esqueleto de mamífero", "Cavernas e florestas", "Insetos e frutas");
echo $morcego->getNomeCientifico() . " - " . $morcego->ecoar() . "<br> </br>";

$baleia = new Baleia("Nome científico: Balaenoptera musculus", "Esqueleto de mamífero", "Oceano", "Krill e peixes");
echo $baleia->getNomeCientifico() . " - " . $baleia->cantar() . "<br> </br>";
?>