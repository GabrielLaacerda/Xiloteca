<?php
function updateRaio($id,$tipo,$PDO){
    header('Content-Type: application/json');
    $sql = "update raio set tipo=? where id=?";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1,$tipo);
    $stmt->bindValue(2,$id);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Raio Atualizado com sucesso!');
        }else{
            echo json_encode('Falha ao Atualizar o Raio!');
        }
    }
}
?>