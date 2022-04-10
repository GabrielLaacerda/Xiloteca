<?php 
include "connBD.php";
include "../model/deletaVaso.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaVaso($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>