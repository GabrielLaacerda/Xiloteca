<?php
    include("../model/cadastraAmostra.php");
    include("../controller/connBD.php");

    $gaveta = $_POST["gaveta"];
    $armario = $_POST["armario"];
    $data_cadastro = $_POST["dataCad"];
    $fromato = $_POST["formato"];
    $origem = $_POST["origem"];
    $bioma = $_POST["bioma"];
    $esp_id = $_POST["especie"];
    $dat = implode('-', array_reverse(explode('/', $data_cadastro)));
   
    criaAmostra($gaveta, $armario, $data_cadastro, $fromato,$origem,$bioma,$esp_id, $PDO);
    header("Location: ../View/cadastros.php");

?>