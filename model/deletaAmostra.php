<?php
function deletaAmostra($id,$PDO){
    header('Content-Type: application/json');
    $sql = "delete from amostra where numero = $id";
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Amostra removida com sucesso!');
        }else{
            echo json_encode('Falha ao remover a amostra!');
        }
    }
}
?>