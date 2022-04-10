<?php
    include("../model/cadastraParenquima.php");
    include("../controller/connBD.php");

    $tipo = $_POST["tipoP"]; 
    criaParenquima($tipo,$PDO);
    $idParenquima = $PDO->lastInsertId();
    $pegaTamanho = $_POST["nomeP"];

    for($i = 0; $i < count($pegaTamanho); $i++){
        $nomes = $_POST["nomeP"][$i];
        criaCaracParenquima($idParenquima,$nomes,$PDO);
    }
    header("Location: ../View/cadastros.php");

?>