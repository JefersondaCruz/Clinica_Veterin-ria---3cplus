<?php 

class veterinario extends Funcionario {
    public function __construct($nome, $idade, $endereco, $contato) {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    public function apresentar () {
    return " \n Nome: {$this->nome} \n Idade: {$this->idade} anos \n Endereço: {$this->endereco} \n contato: {$this->contato} \n Cargo: Veterinário \n Salario: R$ 5,600.00 \n ";
    }
}