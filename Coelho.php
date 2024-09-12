<?php 

    require_once "Animal.php";
    
    class Coelho extends Animal {

        public function __construct($nome, $raca, $qtd_patas, $cor, $peso, $tamanho) {
            parent::__construct($nome, $raca, $qtd_patas, $cor, $peso, $tamanho);
            
        }

        public function apresentarCoelho() {
            echo "\n // COELHO // \n nome: {$this->nome} \n Raça: {$this->raca} \n QTD Patas: {$this->qtd_patas} \n Cor: {$this->cor} \n Peso: {$this->peso}kg \n Tamanho: {$this->tamanho} \n ";
        }

        

        public function falar() {
            return "Thumbs thumbs thumbs   \n " ;
        }
    }