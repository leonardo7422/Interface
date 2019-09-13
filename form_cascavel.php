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
    <h3>Cadastrando Cascavel...</h3>
    <form method="post">
        <?php include ("form_animal.php"); ?>
        <input type="text" name="guizo"
        placebolder="Digite o Tamanho do Guizo..."/><br/>
        <input type="text" name="tipo_pele"
        placebolder="Digite o Tipo da Pele..."/><br/>
        <input type="submit" value="Nova Cascavel"/>
        </form>
        <?php if(!empty ($_POST)){
            include("classeCascavel.php");
            $c = new Cascavel($_POST);
            $_SESSION["cascavel"][] = $c;
            echo" Cascavel cadastrado com sucesso. <br/>";
            echo" (<a href='index.php'>Voltar para 'Animais'</a>)";
            $c->exibir();
        }
        ?>
    
</body>
</html>