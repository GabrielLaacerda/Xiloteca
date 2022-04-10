<?php
function updateCespeciais($id,$descricao,$PDO){
    header('Content-Type: application/json');
    $sql = "update caracteres_especiais set descricao=? where id=?;";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1,$descricao);
    $stmt->bindValue(2,$id);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Caracteres Especiais Atualizado com sucesso!');
        }else{
            echo json_encode('Falha ao Atualizar o Caracter Especial!');
        }
    }
}
?>