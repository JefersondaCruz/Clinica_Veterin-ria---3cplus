<?php 

    class Funcionario extends Humano {
        public $balconista;
        public $veterinário;
        public $vendedor;
        

        public function balconita () {
            return "Salario: R$ 1,941.07";
        }

        public function veterinario () {
            return "Salario: R$ 3,650.50";
        }

        public function vendedor () {
            return "Salario: R$ 2,100.00";
        }
    }