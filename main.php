<?php 

   /* // ANIMAIS E A SUPER CLASS ANIMAL
    require_once "Animal.php";
    require_once "Hamster.php";
    require_once "Coelho.php";
    require_once "Tucano.php";

    // DONO DOS ANIMAIS
    require_once "DonosAnimais.php";

    // FUNCIONARIOS
    require_once "Humano.php";
    require_once "Funcionario.php";
    require_once "Vendedor.php";
    require_once "Veterinario.php";
    require_once "Balconista.php"; */
    require_once "Vendas.php";

    

    // HAMSTER
    /*$Animal1 = new Hamster("Teodoro","roborovski", 4, "café", 5.60, "Médio");
    $Animal1->apresentarHamster(); // chama o perfil do bixo
    echo $Animal1->falar();

    // DONO DO HAMSTER
    $Animal1 = new DonosAnimais("Carlos Henrique", 26, "Rua xv, s/n", "42998344782");
    $Animal1->apresentarDonos();



    // COELHO
    $Animal2 = new Coelho("Betinho", "Mini lop", 4, "Branco", 2.30, "Pequeno" );
    $Animal2->apresentarCoelho();
    echo $Animal2->falar();

    // DONO DO COELHO
    $Animal2 = new DonosAnimais("Joelma Faria", 20, "Rua zanco true, 23", "42998344782");
    $Animal2->apresentarDonos();




    // TUCANO
    $animal3 = new Tucano("Mclovin", "Tucano-toco", 2, "preto/laranja", 0.6, "pequeno");
    $animal3->apresentarTucano();
    echo $animal3->falar();

    // DONO DO TUCANO
    $animal3 = new DonosAnimais("jucelino das tintas", 50, "Rua nossas dores, 147", "42998344782");
    $animal3->apresentarDonos();



    // FUNCIONÁRIOS
    echo " \n // FUNCIONÁRIOS // ";
    $funcionario1 = new Balconista("Fernanda Maria", 19, "rua delas", "4298884154762");
    echo $funcionario1->apresentar();

    $funcionario2 = new Veterinario("Marcos Assunção", 19, "rua delas", "4298884154762");
    echo $funcionario2->apresentar();

    $funcionario3 = new Vendedor("joao daminham", 19, "rua delas", "4298884154762");
    echo $funcionario3->apresentar(); */

    
    // VENDAS //

    $venda1 = new Venda("Ração", 20.59, 50);
    $venda1->items();

    $venda2 = new Venda("Petisco", 5.25, 250);
    $venda2->items();

    $venda3 = new Venda("bolinha", 3.75, 35);
    $venda3->items();

    





    
