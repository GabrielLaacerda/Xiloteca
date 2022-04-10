<?php
function deletaParenquima($id,$PDO){
    header('Content-Type: application/json');
    $sql = "delete from parenquima where id = $id";
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Parenquima removida com sucesso!');
        }else{
            echo json_encode('Falha ao remover a Parenquima!');
        }
    }
}
?>