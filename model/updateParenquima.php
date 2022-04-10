<?php
function updateParenquima($id,$tipo,$PDO){
    header('Content-Type: application/json');
    $sql = "update parenquima set tipo=? where id=?";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1,$tipo);
    $stmt->bindValue(2,$id);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Parenquima Atualizada com sucesso!');
        }else{
            echo json_encode('Falha ao Atualizar a Parenquima!');
        }
    }
}
?>