<?php
    include("../model/cadastraRaio.php");
    include("../controller/connBD.php");

    $tipo = $_POST["tipoR"]; 
    criaRaio($tipo,$PDO);
    $idRaio = $PDO->lastInsertId();
    $pegaTamanho = $_POST["nomeR"];

    for($i = 0; $i < count($pegaTamanho); $i++){
        $nomes = $_POST["nomeR"][$i];
        criaCaracRaio($idRaio,$nomes,$PDO);
    }
    header("Location: ../View/cadastros.php");

?>