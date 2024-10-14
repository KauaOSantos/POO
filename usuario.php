<?php
    class Usuario{

        // atributos = são caracteristicas que nosso objeto terão
        public $nome; 
        public $idade; 
        public $email; 
        public $senha; 
    
        // metodos = ações que nossos objetos poderão executar
        public function Cadastrar (){
                if($this->email == "kaua.miguel@gmail" && $this->senha == "12345"){
                    echo "Cadastrado com sucesso";
                }
                else{
                    echo "Erro ao cadastrar";
                }
            }
        }

    // Palavra reservada "new" para criar um novo objeto a partir da classe "Usuário" 
    $kaua = new Usuario();

    // -> para indicar qual atributo ou método está sendo chamado
    $kaua->nome = "Kauã Miguel";
    $kaua->idade = 18;
    $kaua->email = "kaua.miguel@gmail";
    $kaua->senha = "12345";

    $kaua ->Cadastrar();
    ?>