<?php   

    include "classeAnimal.php";
    
    class Cascavel extends Animal{

        public $tamanho;
        public $tipo_pele;
       
        
    }

     function __construct($vetor){
        $this->salario = $vetor["salario"];
        $this->disciplina = $vetor["disciplina"];
    }
    
  function exibe()
    {
        echo"<fieldset>
            <div>
            <label>Nome:</label>".$this->nome."  
            </div>          

            <div>
            <label>Email:</label>".$this->email."  
            </div>  

            <div>
            <label>CPF:</label>".$this->cpf."  
            </div>  

            <div>
            <label>Sexo:</label>".$this->sexo."  
            </div>  

            <div>
            <label>Nasc:</label>".$this->nasc."  
            </div>  
        </fieldset>
        ";
    }
 function exibeTR()
    {
        
        echo "
          <tr>
            <td>".$this->nome."</td>
            <td>".$this->email."</td>
            <td>".$this->cpf."</td>
            <td>".$this->sexo."</td>
            <td>".$this->nasc."</td>
            </tr>";
    }


  

?>
       