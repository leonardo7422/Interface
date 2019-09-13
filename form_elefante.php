<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>Cadastrando Elefante...</h3>
    <form method="post">
        <?php include ("form_animal.php"); ?>
        <input type="text" name="tamanho_marfim"
        placebolder="Digite o Tamanho do Marfim..."/><br/>
        <input type="text" name="tromba"
        placebolder="Digite o Tamanho da Tromba..."/><br/>
        <input type="submit" value="Novo Elefante"/>
        </form>
        <?php if(!empty ($_POST)){
            include("classeElefante.php");
            $e = new Elefante($_POST);
            $_SESSION["elefante"][] = $e;
            echo" Elefante cadastrado com sucesso. <br/>";
            echo" (<a href='index.php'>Voltar para 'Animais'</a>)";
            $e->exibir();
        }
        ?>
    
</body>
</html>