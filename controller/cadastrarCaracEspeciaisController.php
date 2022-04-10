<?php
    include("../model/cadastrarCaracEspecial.php");
    include("../controller/connBD.php");

    $descricao = $_POST["desc"]; 

    criaCaracEspecial($descricao, $PDO);
    header("Location: ../View/cadastros.php");
?>