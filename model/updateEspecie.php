<?php
function updateEspecie($id,$familia,$genero,$cientifico,$vulgar,$PDO){
    header('Content-Type: application/json');
    $sql = "update especie set familia=?, genero=?, especie_esp=?, nome_vulgar=? where id=?";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1,$familia);
    $stmt->bindValue(2,$genero);
    $stmt->bindValue(3,$cientifico);
    $stmt->bindValue(4,$vulgar);
    $stmt->bindValue(5,$id);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Espécie Atualizada com sucesso!');
        }else{
            echo json_encode('Falha ao Atualizar a Espécie!');
        }
    }
}
?>