<?php 

    require_once "Produto.php";

    class Vendas extends Produto {
        public $nome_pessoa;
        public function __construct($nome_produto, $valor_produto,$quantidade_produto, $nome_pessoa) {
            $this->nome_pessoa = $nome_pessoa;
            parent::__construct($nome_produto, $valor_produto,$quantidade_produto,);
        }


        public function ListaVendido() {
            $totalpreço = $this->quantidade_produto * $this->valor_produto;
            echo " \n $this->nome_pessoa \n comprou $this->quantidade_produto unidades de $this->nome_produto por R$ $totalpreço Reais. \n ";
        }
    }