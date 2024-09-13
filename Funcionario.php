<?php 
    require_once "Humano.php";

    class Funcionario extends Humano {
        public $balconista;
        public $veterinário;
        public $vendedor;
        
        public function __construct($nome, $idade, $endereco, $contato) {
            parent::__construct($nome, $idade, $endereco, $contato);
            $this->nome = $nome;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
        }
    }
