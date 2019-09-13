<?php   

    class Animal{

        public $peso;
        public $cor;
        public $especie;
        protected $velocidade_maxima;

    

        public function __construct($vetor){
        $this->peso = $vetor["peso"];
        $this->cor = $vetor["cor"];
        $this->especie = $vetor["especie"];

    }

         protected function exibir(){

            echo"<label>Peso</label>: ".$this->peso."<br/>";
            echo"<label>Cor</label>: ".$this->cor."<br/>";
            echo"<label>Especie</label>: ".$this->especie."<br/>";
            echo"<label>Velocidade Máxima</label>: ".$this->velocidade_maxima."<br/>";
    }
    }
    ?>
    