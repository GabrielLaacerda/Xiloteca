<?php 
include "connBD.php";
include "../model/updateParenquima.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    $tipo = $_POST["tipo"];
    
    updateParenquima($id,$tipo,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>