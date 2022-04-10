<?php 
include "connBD.php";
include "../model/updateVaso.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    
    updateVaso($id,$nome,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>