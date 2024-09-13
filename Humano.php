<?php

class Humano  {
    public $nome;
    public $idade;
    public $endereco;
    public $contato;

    public function __construct($nome, $idade, $endereco, $contato )
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }
}