<?php
    include("../model/cadastraEspecie.php");
    include("../controller/connBD.php");

    $familia = $_POST["familia"]; 
    $genero = $_POST["genero"];
    $cientifico = $_POST["cientifico"];
    $vulgar = $_POST["vulgar"];

    criaEspecie($familia, $genero, $cientifico, $vulgar, $PDO);
    header("Location: ../View/cadastros.php");

?>