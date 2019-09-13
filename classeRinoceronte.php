<?php   

  
require_once ("classeAnimal.php"); 
require_once  ("InterfaceExibicao.php"); 
require_once  ("InterfaceLocomocao.php"); 

    class Rinoceronte extends Animal implements Locomocao{

        private $chifre;
        
       
        
    public function __construct($vetor){
        parent::__construct($vetor);
        $this->chifre = $vetor["chifre"];
        $this->velocidade_maxima = 40;
    }

    
        public function locomover($a){
            $a =" Se locomove usando 4 patas, metodo convencional (terrestre)";
        }

        public function exibir(){
            parent::exibir();
            echo"<label>Tamanho chifre</label>: ".$this->chifre."<br/>";

        }
    }
       