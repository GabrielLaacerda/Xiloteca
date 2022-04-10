<?php 
include "connBD.php";
include "../model/updateRaio.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    $tipo = $_POST["tipo"];
    
    updateRaio($id,$tipo,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>