<?php
function updateAmostra($numero,$gaveta,$armario, $dataC, $formato, $origem, $bioma,$PDO){
    header('Content-Type: application/json');
    $sql = "update amostra set gaveta=?, armario=?, data_cadastro=?, formato=?, origem=?, bioma=? where numero=?";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1,$gaveta);
    $stmt->bindValue(2,$armario);
    $stmt->bindValue(3,$dataC);
    $stmt->bindValue(4,$formato);
    $stmt->bindValue(5,$origem);
    $stmt->bindValue(6,$bioma);
    $stmt->bindValue(7,$numero);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Amostra Atualizada com sucesso!');
        }else{
            echo json_encode('Falha ao Atualizar a Amostra!');
        }
    }
}
?>