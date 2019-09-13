<?php   

 
require_once ("classeAnimal.php"); 
require_once  ("InterfaceExibicao.php"); 
require_once  ("InterfaceLocomocao.php"); 
    
    class Bagre extends Animal implements Locomocao{

        public $escama;
        public $nadadeira;
       
        
    

     function __construct($vetor){
         parent::__construct($vetor);
        $this->escama = $vetor["escama"];
        $this->nadadeira = $vetor["nadadeira"];
        $this->velocidade_maxima = 40;
    }
    
    
        public function locomover($a){
            $a = "Se locomove usando sua Nadadeira";
        }

        public function exibir(){
            parent::exibir();
            echo"<label>Tipo escama</label>: ".$this->escama."<br/>";
            echo"<label>Tamanho Nadadeira</label>: ".$this->nadadeira."<br/>";

        }
    }


  

?>
       