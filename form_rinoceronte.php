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
    <h3>Cadastrando Rinoceronte...</h3>
    <form method="post">
        <?php include ("form_animal.php"); ?>
        <input type="number" name="chifre"
        placebolder="Digite o Tamanho do Chifre..."/><br/>
        <input type="submit" value="Novo Rinoceronte"/>
        </form>
        <?php if(!empty ($_POST)){
            include("classeRinoceronte.php");
            $r = new Rinoceronte($_POST);
            $_SESSION["rinoceronte"][] = $r;
            echo" Rinoceronte cadastrado com sucesso. <br/>";
            echo" (<a href='index.php'>Voltar para 'Animais'</a>)";
            $r->exibir();
        }
        ?>
    
</body>
</html>