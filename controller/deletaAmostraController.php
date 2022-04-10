<?php 
include "connBD.php";
include "../model/deletaAmostra.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaAmostra($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>