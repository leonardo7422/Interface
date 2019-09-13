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
    <h3>Cadastrando Leão...</h3>
    <form method="post">
        <?php include ("form_animal.php"); ?>
        <input type="number" name="pelo"
        placebolder="Digite o pelo..."/> <br/>
        <input type="text" name="tamanho_juba"
        placebolder="Digite o tamanho da juba..."/> <br/>
        <input type="text" name="local_habitado"
        placebolder="Digite o local habitado..."/> <br/>
        <input type="submit" value="Novo Leão"/>
        </form>
        <?php if(!empty ($_POST)){
            include("classeLeao.php");
            $l = new Leao($_POST);
            $_SESSION["leao"][] = $l;
            echo" Leão cadastrado com sucesso. <br/>";
            echo" (<a href='index.php'>Voltar para 'Animais'</a>)";
            $l->exibir();
        }
        ?>
    
</body>
</html>