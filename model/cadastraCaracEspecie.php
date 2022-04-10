<?php
function criaCaracteristicaEspecie($id_esp, $id_paren, $id_org, $id_caracEsp, $id_raio, $id_vasos, $PDO){
    try{
         
        $ce = $id_caracEsp;
        $sql = "insert into caracteristica_especie(fk_especie_id, fk_parenquima_id, fk_organolepticas_id, fk_caracteres_especiais_id, fk_raio_id, fk_tipo_dado_vasos_id) values (?, ?, ?, ?, ?, ?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$id_esp);
        $stmt->bindParam(2,$id_paren);
        $stmt->bindParam(3,$id_org);
        
        if($ce == 0){
            $ce = null;
            $stmt->bindParam(4,$ce);
        }else{
            $stmt->bindParam(4,$id_caracEsp);
        }
        $stmt->bindParam(5,$id_raio);
        $stmt->bindParam(6,$id_vasos);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
?>