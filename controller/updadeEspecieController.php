<?php 
include "connBD.php";
include "../model/updateEspecie.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    $familia = $_POST["familia"];
    $genero = $_POST["genero"];
    $cientifico = $_POST["ncien"];
    $vulgar = $_POST["nvulg"];
    
    updateEspecie($id,$familia,$genero,$cientifico,$vulgar,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>