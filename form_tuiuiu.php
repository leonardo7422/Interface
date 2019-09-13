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
    <h3>Cadastrando Tuiuiu...</h3>
    <form method="post">
        <?php include ("form_animal.php"); ?>
        <input type="text" name="bico"
        placebolder="Digite o Tamanho do Bico..."/><br/>
        <input type="text" name="asa"
        placebolder="Digite o Tamanho da Asa..."/><br/>
        <input type="submit" value="Novo Tuiuiu"/>
        </form>
        <?php if(!empty ($_POST)){
            include("classeTuiuiu.php");
            $t = new Tuiuiu($_POST);
            $_SESSION["tuiuiu"][] = $t;
            echo" Tuiuiu cadastrado com sucesso. <br/>";
            echo" (<a href='index.php'>Voltar para 'Animais'</a>)";
            $t->exibir();
        }
        ?>
    
</body>
</html>