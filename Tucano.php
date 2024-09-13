<?php 

    require_once "Animal.php";

    class Tucano extends Animal {

        public function __construct($nome, $raca, $qtd_patas, $cor, $peso, $tamanho) {
            parent::__construct($nome, $raca, $qtd_patas, $cor, $peso, $tamanho);
            
        }

        public function apresentarTucano() {
            echo " \n // TUCANO // \n nome: {$this->nome} \n Raça: {$this->raca} \n QTD Patas: {$this->qtd_patas} \n Cor: {$this->cor} \n Peso: {$this->peso}kg \n Tamanho: {$this->tamanho} \n ";
        }

        

        public function falar() {
            return "Canto: Grraaak! Grraaak  \n " ;
        }

    }