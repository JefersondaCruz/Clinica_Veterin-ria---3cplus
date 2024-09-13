<?php

    class Venda {
        public $nome_produto;
        public $valor_produto;
        public $quantidade_produto;
        

        public function __construct($nome_produto, $valor_produto,$quantidade_produto) {

        $this->nome_produto = $nome_produto;
        $this->valor_produto = $valor_produto;
        $this->quantidade_produto = $quantidade_produto;

        } 
        
        public function items() {
            echo " \n Produto: $this->nome_produto \n Valor: R$ $this->valor_produto \n Quantidade Em Estoque: $this->quantidade_produto \n";
        }

}