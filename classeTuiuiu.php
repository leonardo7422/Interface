<?php   


require_once ("classeAnimal.php"); 
require_once  ("InterfaceExibicao.php"); 
require_once  ("InterfaceLocomocao.php"); 

    class Tuiuiu extends Animal implements Locomocao{

        public $bico;
        public $asa;
       
        

     function __construct($vetor){
         parent::__construct($vetor);
        $this->bico = $vetor["bico"];
        $this->asa = $vetor["asa"];
        $this->velocidade_maxima = 40;
    }


        public function locomover($a){
            $a = "Se locomove pelo ar usando sua asa";
        }
        
        public function exibir(){
            parent::exibir();
            echo"<label>Tamanho do Bico</label>: ".$this->bico."<br/>";
            echo"<label>Tamanho Asa</label>: ".$this->asa."<br/>";

        }
    }

    
  


  

?>
       