<?php 

    // ANIMAIS E A SUPER CLASS ANIMAL
    require_once "Animal.php";
    require_once "Hamster.php";
    require_once "Coelho.php";
    require_once "Tucano.php";

    // DONO DOS ANIMAIS
    require_once "DonoHamster.php";
    require_once "DonoCoelho.php";
    require_once "DonoTucano.php";

    require_once "Humano.php";
    require_once "Funcionario.php";

    

    // HAMSTER
    $Animal1 = new Hamster("Teodoro","roborovski", 4, "café", 5.60, "Médio");
    $Animal1->apresentarHamster(); // chama o perfil do bixo
    echo $Animal1->falar();

    // DONO DO HAMSTER
    $Animal1 = new DonoHamster("Carlos Henrique", 26, "Rua xv, s/n", "42998344782");
    $Animal1->apresentarHUM();



    // COELHO
    $Animal2 = new Coelho("Betinho", "Mini lop", 4, "Branco", 2.30, "Pequeno" );
    $Animal2->apresentarCoelho();
    echo $Animal2->falar();

    // DONO DO COELHO
    $Animal2 = new DonoCoelho("Joelma Faria", 20, "Rua zanco true, 23", "42998344782");
    $Animal2->apresentarHUM2();




    // TUCANO
    $animal3 = new Tucano("Mclovin", "Tucano-toco", 2, "preto/laranja", 0.6, "pequeno");
    $animal3->apresentarTucano();
    echo $animal3->falar();

    // DONO DO TUCANO
    $animal3 = new DonoTucano("jucelino das tintas", 50, "Rua nossas dores, 147", "42998344782");
    $animal3->apresentarHUM3();



    // FUNCIONÁRIOS
    $funcionario1 = new Funcionario("Fernanda Maria", 19, "rua delas", "4298884154762");
    echo $funcionario1->balconista();

    $funcionario2 = new Funcionario("Marcos Assunção", 19, "rua delas", "4298884154762");
    echo $funcionario2->veterinario();

    $funcionario3 = new Funcionario("joao daminham", 19, "rua delas", "4298884154762");
    echo $funcionario3->vendedor();

    





    
