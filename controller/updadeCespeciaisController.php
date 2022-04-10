<?php 
include "connBD.php";
include "../model/updateCespeciais.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    $descricao = $_POST["descricao"];
    updateCespeciais($id,$descricao,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>