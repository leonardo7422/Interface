<?php   


require_once ("classeAnimal.php"); 
require_once  ("InterfaceExibicao.php"); 
require_once  ("InterfaceLocomocao.php"); 
    
    class Elefante extends Animal implements Locomocao{

        public $tamanho_marfim;
        public $tromba;
       
    

     function __construct($vetor){
         parent::__construct($vetor);
        $this->tamanho_marfim = $vetor["tamanho_marfim"];
        $this->tromba = $vetor["tromba"];
        $this->velocidade_maxima = 45;
    }

    
    public function locomover($a){
        $a =" Se locomove usando 4 patas, metodo convencional (terrestre)";
    }

    public function exibir(){
        parent::exibir();
        echo"<label>Tamanho chifre</label>: ".$this->tamanho_marfim."<br/>";
        echo"<label>Tamanho chifre</label>: ".$this->tromba."<br/>";

    }
}
 


  

?>
       