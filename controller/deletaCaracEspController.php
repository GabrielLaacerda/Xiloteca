<?php 
include "connBD.php";
include "../model/deletaCaracEsp.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    deletaCaracEsp($id,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>