<?php
    include("../model/cadastraLamina.php");
    include("../controller/connBD.php");

    $gaveta = $_POST["gaveta2"]; 
    $armario = $_POST["armario2"];
    $id_amos = $_POST["amostraID"];
    criaLamina($gaveta, $armario, $id_amos, $PDO);
    
    $idLamina = $PDO->lastInsertId();
    $nomeVul = $_POST["nome_vul"];
    $familia = $_POST["fami"];
    $genero = $_POST["gen"];
    $especie = $_POST["espe"];
    criaIdentificacao($nomeVul, $familia, $genero, $especie, $idLamina, $PDO);


    header("Location: ../View/cadastros.php");

?>