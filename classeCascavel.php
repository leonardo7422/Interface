<?php   

    include "classeAnimal.php";
    include ("InterfaceExibicao.php"); 
    include ("InterfaceLocomocao.php");
    
    class Cascavel extends Animal implements Locomocao{

        public $guizo;
        public $tipo_pele;
    

     function __construct($vetor){
        parent::__construct($vetor);
        $this->guizo = $vetor["guizo"];
        $this->tipo_pele = $vetor["tipo_pele"];
        $this->velocidade_maxima = 60;
    }
    
        public function locomover($a){
            $a = "Se locomove rastejando";

        }
        public function exibir(){
            parent::exibir();
            echo"<label>Tamanho Guizo</label>: ".$this->guizo."<br/>";
            echo"<label>Tipo da pele</label>: ".$this->tipo_pele."<br/>";

        }
    }



  

?>
       