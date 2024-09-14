<?php 

    // ANIMAIS E A SUPER CLASS ANIMAL
    require_once "Animal.php";
    require_once "Hamster.php";
    require_once "Coelho.php";
    require_once "Tucano.php";

    // DONO DOS ANIMAIS
    require_once "DonosAnimais.php";

    // FUNCIONARIOS E PESSOAS
    require_once "Humano.php";
    require_once "Funcionario.php";
    require_once "Vendedor.php";
    require_once "Veterinario.php";
    require_once "Balconista.php"; 

    // PRODUTO E VENDAS
    require_once "Vendas.php";
    require_once "Produto.php";

    while(true){ // LACO PARA INFINITO PARA O SISTEMA DE ESCOLHAS //
      echo " \n Escolha uma opção \n ";
      echo "1. Animais Cadastrados \n ";
      echo "2. Mostrar Funcionários \n ";
      echo "3. Aba de produtos cadastrados \n ";
      echo "4. Produtos Vendidos \n ";
      echo "5. Sair \n";
      $opção = readline("Escolha uma opção: ");

      
      switch ($opção) {


          case 1:  /// ANIMAIS E SEUS RESPECTIVOS DONOS ////

            $Animal1 = new Hamster("Teodoro","roborovski", 4, "café", 5.60, "Médio");
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
              break;




          case 2:  // FUNCIONÁRIOS //
            echo " \n // FUNCIONÁRIOS // ";
            $funcionario1 = new Balconista("Fernanda Maria", 19, "rua delas", "4298884154762");
            echo $funcionario1->apresentar();
        
            $funcionario2 = new Veterinario("Marcos Assunção", 19, "rua delas", "4298884154762");
            echo $funcionario2->apresentar();
        
            $funcionario3 = new Vendedor("joao daminham", 19, "rua delas", "4298884154762");
            echo $funcionario3->apresentar();
              break;



          case 3: // PRODUTOS EM ESTOQUE //
            $Produto1 = new Produto("Ração", 20.59, 50);
            $Produto1->items();
        
            $Produto2 = new Produto("Petisco", 5.25, 250);
            $Produto2->items();
        
            $Produto3 = new Produto("bolinha", 3.75, 35);
            $Produto3->items();
            break; 

            
            
          case 4: // VENDAS //
            $vendas1 = new Vendas ("Ração", 20.59, 4, "Joelma Faria");
            $vendas1->ListaVendido();

            $vendas2 = new Vendas ("Bolinha", 5.25, 2, "Marcos assunção");
            $vendas2->ListaVendido();

            $vendas3 = new Vendas ("Petisco", 5.25, 7, "Mclovin");
            $vendas3->ListaVendido();
            break; 
            
            
          case 5:
              echo "Saindo....";
              break 2;    



          default:
              echo "Opção invalida, tente novamente"; 
              break;   

      }
  }

    





    
