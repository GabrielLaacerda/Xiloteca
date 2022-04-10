<?php
function deletaOrganoleptica($id,$PDO){
    header('Content-Type: application/json');
    $sql = "delete from organolepticas where id = $id";
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Organoléptica removida com sucesso!');
        }else{
            echo json_encode('Falha ao remover a Organoléptica!');
        }
    }
}
?>