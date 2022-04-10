<?php
function updateOrganolepticas($id,$odor,$gosto,$brilho,$textura,$cor,$PDO){
    header('Content-Type: application/json');
    $sql = "update organolepticas set odor=?, gosto=?, brilho=?, textura=?, cor=? where id=?";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1,$odor);
    $stmt->bindValue(2,$gosto);
    $stmt->bindValue(3,$brilho);
    $stmt->bindValue(4,$textura);
    $stmt->bindValue(5,$cor);
    $stmt->bindValue(6,$id);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Organoleptica Atualizada com sucesso!');
        }else{
            echo json_encode('Falha ao Atualizar a Organoleptica!');
        }
    }
}
?>