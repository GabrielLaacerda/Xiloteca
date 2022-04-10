<?php
function deletaVaso($id,$PDO){
    header('Content-Type: application/json');
    $sql = "delete from tipo_dado_vasos where id = $id";
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Vaso removido com sucesso!');
        }else{
            echo json_encode('Falha ao remover o Vaso!');
        }
    }
}
?>