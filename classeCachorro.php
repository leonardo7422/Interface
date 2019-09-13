<?php

    include("interfaceLocomocao.php");

    class Cachorro implements Locomocao{

        private $posicao;

        public function __construct(){
            $this->posicao = 0;
        }

        public function locomover($a){
            $this->posicao += $a;
        }
    }

 
    ?>