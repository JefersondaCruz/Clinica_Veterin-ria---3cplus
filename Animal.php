<?php

    class Animal {
        public $nome;
        public $raca;
        public $qtd_patas;
        public $cor;
        public $peso;
        public $tamanho;

        function __construct($nome, $raca, $qtd_patas, $cor, $peso, $tamanho) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->qtd_patas = $qtd_patas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;

        }

        public function falar() {
            echo "Animal falando";
        }

    }

    