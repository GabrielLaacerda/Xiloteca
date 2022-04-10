<?php 
include "connBD.php";
include "../model/deletaEspecie.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaEspecie($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>