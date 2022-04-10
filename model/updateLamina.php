<?php
function updateLamina($id,$familia,$genero,$especie,$vulgar,$PDO){
    header('Content-Type: application/json');
    $sql = "update identificacao set nome_vulgar=?, familia=?, genero=?, especie=? where id=?";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1,$vulgar);
    $stmt->bindValue(2,$familia);
    $stmt->bindValue(3,$genero);
    $stmt->bindValue(4,$especie);
    $stmt->bindValue(5,$id);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Lamina Atualizada com sucesso!');
        }else{
            echo json_encode('Falha ao Atualizar a Lamina!');
        }
    }
}
?>