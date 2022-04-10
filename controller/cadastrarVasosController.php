<?php
    include("../model/cadastraVasos.php");
    include("../controller/connBD.php");

    $tipo = $_POST["tipoV"]; 
    criaVaso($tipo,$PDO);
    
    $idVaso = $PDO->lastInsertId();
    $pegaTamanho = $_POST["caracV"];

    for($i = 0; $i < count($pegaTamanho); $i++){
        $caracv = $_POST["caracV"][$i];
        criaCaracVaso($idVaso,$caracv,$PDO);
        $idCaracVaso = $PDO->lastInsertId();
        $definv = $_POST["definicaovaso"][$i];
        criaDefinVaso($idCaracVaso, $definv, $PDO);
    }
    header("Location: ../View/cadastros.php");

?>