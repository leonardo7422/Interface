<?php 

    require_once ("classeAnimal.php"); 
    require_once ("InterfaceExibicao.php"); 
    require_once ("InterfaceLocomocao.php"); 
    include ("classeLeao");
    include ("classeRinoceronte");
    include ("classeBagre");
    include ("classeCascavel");
    include ("classeTuiuiu");
    include ("classeElefante");

    session_start();

    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="utf-8" />
            </head>
            <body>
            <h3>Leao</h3>
            <table border="1">
            <tr>
            <td>Peso</td>
            <td>Cor</td>
            <td>Especie</td>
            <td>Velocidade</td>
            <td>Pelo</td>
            <td>Tamanho Juba</td>
            <td>Local Habitado</td>
            </tr>

    <?php
        foreach($_SESSION["leao"] as $i=>$l){
            $l->exibe_tr();
        }
        ?>

        <hr/>

        <!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="utf-8" />
            </head>
            <body>
            <h3>Rinoceronte</h3>
            <table border="1">
            <tr>
            <td>Peso</td>
            <td>Cor</td>
            <td>Especie</td>
            <td>Velocidade</td>
            <td>Chifre</td>
            </tr>

    <?php
        foreach($_SESSION["rinoceronte"] as $i=>$r){
            $r->exibe_tr();
        }
        ?>
        
        <hr/>

        <!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="utf-8" />
            </head>
            <body>
            <h3>Bagre</h3>
            <table border="1">
            <tr>
            <td>Peso</td>
            <td>Cor</td>
            <td>Especie</td>
            <td>Velocidade</td>
            <td>Escama</td>
            <td>Nadadeira</td>
            </tr>

    <?php
        foreach($_SESSION["bagre"] as $i=>$b){
            $b->exibe_tr();
        }
        ?>

        <hr/>

        <!DOCTYPE HTML>
        <html>
        <head>
            <meta charset="utf-8" />
            </head>
            <body>
            <h3>Cascavel</h3>
            <table border="1">
            <tr>
            <td>Peso</td>
            <td>Cor</td>
            <td>Especie</td>
            <td>Velocidade</td>
            <td>Guizo</td>
            <td>Tipo de Pele</td>
            </tr>

        <?php
        foreach($_SESSION["cascavel"] as $i=>$c){
            $c->exibe_tr();
        }
        ?>

        <hr/>

        <!DOCTYPE HTML>
        <html>
        <head>
            <meta charset="utf-8" />
            </head>
            <body>
            <h3>Elefante</h3>
            <table border="1">
            <tr>
            <td>Peso</td>
            <td>Cor</td>
            <td>Especie</td>
            <td>Velocidade</td>
            <td>Tamanho Marfim</td>
            <td>Tromba</td>
            </tr>

        <?php
        foreach($_SESSION["elefante"] as $i=>$e){
            $e->exibe_tr();
        }
        ?>

        <hr/>

        <!DOCTYPE HTML>
        <html>
        <head>
            <meta charset="utf-8" />
            </head>
            <body>
            <h3>Tuiuiu</h3>
            <table border="1">
            <tr>
            <td>Peso</td>
            <td>Cor</td>
            <td>Especie</td>
            <td>Velocidade</td>
            <td>Tamanho Bico</td>
            <td>Tamanho Asa</td>
            </tr>

        <?php
        foreach($_SESSION["tuiuiu"] as $i=>$t){
            $t->exibe_tr();
        }
        ?>
