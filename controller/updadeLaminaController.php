<?php 
include "connBD.php";
include "../model/updateLamina.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    $familia = $_POST["familia"];
    $genero = $_POST["genero"];
    $especie = $_POST["especie"];
    $vulgar = $_POST["vnome"];
    
    updateLamina($id,$familia,$genero,$especie,$vulgar,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>