<?php 
include "connBD.php";
include "../model/updateOrganolepticas.php";
header('Content-Type: application/json');

try{
    $id = $_POST["id"];
    $odor = $_POST["odor"];
    $gosto = $_POST["gosto"];
    $brilho = $_POST["brilho"];
    $textura = $_POST["textura"];
    $cor = $_POST["cor"];
    
    updateOrganolepticas($id,$odor,$gosto,$brilho,$textura,$cor,$PDO);

}catch(Exception $erro){
    echo $erro;
}
?>