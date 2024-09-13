<?php

    while(true){
        echo "Escolha uma opção";
        echo "1. Animais Cadastrados ";
        echo "2. Mostrar Funcionários";
        echo "3. Aba de compra/vendas";
        $opção = readline("Escolha uma opção");

        switch (true) {
            case 1:
                // mostrar os animais
                break;
            case 2:
                // mostrar os funcionários
                break;
            case 3:
                // ABA DE VENDAS
                break;   
            case 4:
                echo "Saindo.....";     
            default:
                echo "Opção invalida, tente novamente"; 
                break;   

        }
    }