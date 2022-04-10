<?php
function deletaCEspeciais($id,$PDO){
    header('Content-Type: application/json');
    $sql = "delete from caracteres_especiais where id = $id";
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Caractere Especial removido com sucesso!');
        }else{
            echo json_encode('Falha ao remover o Caractere Especial!');
        }
    }
}
?>