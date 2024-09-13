<?php


    class DonoHamster  {
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
            echo "\n  // DONO // \n Nome: {$this->nome} \n Idade: {$this->idade} anos \n Endereço: {$this->endereco} \n contato: {$this->contato} \n ";
        }
        
    }

    