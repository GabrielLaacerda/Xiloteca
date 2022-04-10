<?php
function deletaEspecie($id,$PDO){
    header('Content-Type: application/json');
    $sql = "delete from especie where id = $id";
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Espécie removida com sucesso!');
        }else{
            echo json_encode('Falha ao remover a Espécie!');
        }
    }
}
?>