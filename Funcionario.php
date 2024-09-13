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

        public function balconista () {
            return "\n // FUNCIONÁRIOS //  \n Nome: {$this->nome} \n Idade: {$this->idade} anos \n Endereço: {$this->endereco} \n contato: {$this->contato} \n Cargo: Balconista \n Salario: R$ 1,941.07 \n";
        }

        public function veterinario () {
            return " \n Nome: {$this->nome} \n Idade: {$this->idade} anos \n Endereço: {$this->endereco} \n contato: {$this->contato} \n Cargo: veterinario \n Salario: R$ 3,650.50 \n";
        }

        public function vendedor () {
            return " \n Nome: {$this->nome} \n Idade: {$this->idade} anos \n Endereço: {$this->endereco} \n contato: {$this->contato} \n Cargo: Vendedor \n Salario: R$ 2,100.00";
        }
    }