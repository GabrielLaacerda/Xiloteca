<?php
function deletaLamina($id,$PDO){
    header('Content-Type: application/json');
    $sql = "delete from lamina where numero = $id";
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Lamina removida com sucesso!');
        }else{
            echo json_encode('Falha ao remover a lamina!');
        }
    }
}
?>