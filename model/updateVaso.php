<?php
function updateVaso($id,$nome,$PDO){
    header('Content-Type: application/json');
    $sql = "update tipo_dado_vasos set nome=? where id=?";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1,$nome);
    $stmt->bindValue(2,$id);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Vaso Atualizado com sucesso!');
        }else{
            echo json_encode('Falha ao Atualizar o Vaso!');
        }
    }
}
?>