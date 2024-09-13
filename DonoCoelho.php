<?php


    class DonoCoelho  {
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

        public function apresentarHUM2() {
            echo "\n  // DONO // \n nome: {$this->nome} \n Idade: {$this->idade} anos \n Endereço: {$this->endereco} \n contato: {$this->contato} \n";
        }
        
    }
