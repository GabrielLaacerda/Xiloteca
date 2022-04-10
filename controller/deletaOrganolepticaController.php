<?php 
include "connBD.php";
include "../model/deletaOrganoleptica.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaOrganoleptica($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>