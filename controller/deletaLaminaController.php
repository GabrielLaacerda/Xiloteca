<?php 
include "connBD.php";
include "../model/deletaLamina.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaLamina($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>