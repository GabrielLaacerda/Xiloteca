<?php 
include "connBD.php";
include "../model/deletaParenquima.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaParenquima($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>