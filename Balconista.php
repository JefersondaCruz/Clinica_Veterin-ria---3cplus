<?php


class balconista extends Funcionario  {
    public function __construct($nome, $idade, $endereco, $contato) {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    public function apresentar () {
    return " \n Nome: {$this->nome} \n Idade: {$this->idade} anos \n Endereço: {$this->endereco} \n contato: {$this->contato} \n Cargo: Balconista \n Salario: R$ 1,900.00 \n";
    }
}