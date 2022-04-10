<?php 
include "connBD.php";
include "../model/updateAmostra.php";
header('Content-Type: application/json');

try{
    $numero = $_POST["numero"];
    $gaveta = $_POST["gaveta"];
    $armario = $_POST["armario"];
    $dataC = $_POST["dataC"];
    $formato = $_POST["formato"];
    $origem = $_POST["origem"];
    $bioma = $_POST["bioma"];
    
    updateAmostra($numero,$gaveta,$armario, $dataC, $formato, $origem, $bioma,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>