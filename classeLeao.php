<?php   

    require_once ("classeAnimal.php"); 
    require_once  ("InterfaceExibicao.php"); 
    require_once  ("InterfaceLocomocao.php"); 


    class Leao extends Animal implements Locomocao{

        public $pelo;
        public $tamanho_juba;
        public $local_habitado;
       
    

    public function __construct($vetor){
        parent::__construct($vetor);
        $this->pelo = $vetor["pelo"];
        $this->tamanho_juba = $vetor["tamanho_juba"];
        $this->local_habitado = $vetor["local_habitado"];
        $this->velocidade_maxima = 50;
    }

    
        public function locomover($a){
            $a = "Se locomove usando 4 patas, metodo convencional (terrestre)";
        }
        
        public function exibir(){  
            parent::exibir();
            echo"<label>Pelo</label>: ".$this->pelo."<br/>";
            echo"<label>Tamanho Juba</label>: ".$this->tamanho_juba."<br/>";
            echo"<label>Local Habitado</label>: ".$this->local_habitado."<br/>";

        }
    }