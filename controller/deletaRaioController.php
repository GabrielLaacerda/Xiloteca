<?php 
include "connBD.php";
include "../model/deletaRaio.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaRaio($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>