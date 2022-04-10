<?php
    include("../model/cadastraCaracEspecie.php");
    include("../controller/connBD.php");

    $id_esp = $_POST["espCE"];
    $id_paren = $_POST["parCE"];
    $id_org = $_POST["orgCE"];
    $id_caracEsp = $_POST["cespCE"];
    $id_raio = $_POST["raiCE"];
    $id_vasos = $_POST["vasCE"];

    criaCaracteristicaEspecie($id_esp, $id_paren, $id_org, $id_caracEsp, $id_raio, $id_vasos, $PDO);
    header("Location: ../View/cadastros.php");

?>