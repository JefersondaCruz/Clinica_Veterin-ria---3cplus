<?php 

require_once "Animal.php";

class Hamster extends Animal  {

        public function __construct($nome, $raca, $qtd_patas, $cor, $peso, $tamanho) {
            parent::__construct($nome, $raca, $qtd_patas, $cor, $peso, $tamanho);
            
        }

        public function apresentarHamster() {
            echo "// HAMSTER // \n Nome: {$this->nome} \n Raça: {$this->raca} \n QTD Patas: {$this->qtd_patas} \n Cor: {$this->cor} \n Peso: {$this->peso}kg \n Tamanho: {$this->tamanho} \n ";
        }

        

        public function falar() {
            return "Canto: kew kew kew  \n " ;
        }
    }
    



