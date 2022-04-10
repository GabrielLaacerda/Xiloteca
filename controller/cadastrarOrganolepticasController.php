<?php
    include("../model/cadastrarOrganoleptica.php");
    include("../controller/connBD.php");

    $odor = $_POST["odor"]; 
    $gosto = $_POST["gosto"];
    $brilho = $_POST["brilho"];
    $textura = $_POST["textura"];
    $cor = $_POST["cor"];

    criaOrganoleptica($odor,$gosto,$brilho,$textura,$cor,$PDO);
    header("Location: ../View/cadastros.php");
?>