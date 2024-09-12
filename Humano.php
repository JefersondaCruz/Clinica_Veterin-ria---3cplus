<?php


    class Humano  {
        public $nome;
        public $idade;
        public $endereco;
        public $contato;

        public function __construct($nome, $idade, $endereco, $contato )
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
        }

        public function apresentarHUM() {
            echo "\n  // DONO // \n nome: {$this->nome} \n Idade: {$this->idade} \n Endereço: {$this->endereco} \n contato: {$this->contato} \n ";
        }
        
    }

    



    $Humano3 = new Humano("jucelino das tintas", 50, "Rua nossas dores, 147", "42998344782");