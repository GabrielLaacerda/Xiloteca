<?php 
include "connBD.php";
include "../model/deletaCEspeciais.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaCEspeciais($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>