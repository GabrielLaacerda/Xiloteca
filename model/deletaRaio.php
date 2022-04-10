<?php
function deletaRaio($id,$PDO){
    header('Content-Type: application/json');
    $sql = "delete from raio where id = $id";
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Raio removido com sucesso!');
        }else{
            echo json_encode('Falha ao remover o Raio!');
        }
    }
}
?>