<?php 
    require_once "Animal.php";
    require_once "Hamster.php";
    require_once "Coelho.php";
    require_once "Tucano.php";
    
    require_once "Humano.php";
    require_once "Funcionario.php";
    require_once "Humano2.php";

    // HAMSTER
    $Animal1 = new Hamster("Teodoro","roborovski", 4, "café", 5.60, "Médio");
    $Animal1->apresentarHamster(); // chama o perfil do bixo
    echo $Animal1->falar();

    // DONO DO HAMSTER
    $Animal1 = new Humano("Carlos Henrique", 26, "Rua xv, s/n", "42998344782");
    $Animal1->apresentarHUM();


    // COELHO
    $Animal2 = new Coelho("Betinho", "Mini lop", 4, "Branco", 2.30, "Pequeno" );
    $Animal2->apresentarCoelho();
    echo $Animal2->falar();

    // DONO DO COELHO
    $Animal2 = new Humano2("Joelma Faria", 20, "Rua zanco true, 23", "42998344782");
    $Animal2->apresentarHUM2();
    





    
