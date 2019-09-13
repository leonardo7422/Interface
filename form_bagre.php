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
    <h3>Cadastrando Bagre...</h3>
    <form method="post">
        <?php include ("form_animal.php"); ?>
        <input type="text" name="escama"
        placebolder="Digite o Tipo da escama..."/><br/>
        <input type="text" name="nadadeira"
        placebolder="Digite o Tamanho da Nadadeira..."/><br/>
        <input type="submit" value="Novo Bagre"/>
        </form>
        <?php if(!empty ($_POST)){
            include("classeBagre.php");
            $b = new Bagre($_POST);
            $_SESSION["elefante"][] = $b;
            echo" Bagre cadastrado com sucesso. <br/>";
            echo" (<a href='index.php'>Voltar para 'Animais'</a>)";
            $b->exibir();
        }
        ?>
    
</body>
</html>