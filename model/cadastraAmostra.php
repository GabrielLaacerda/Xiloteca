<?php
function criaAmostra($gaveta, $armario, $data_cadastro, $fromato,$origem,$bioma,$esp_id, $PDO){
    try{
      
        $sql = "insert into amostra(gaveta, armario, data_cadastro, formato, origem, bioma, fk_especie_id) values (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$gaveta);
        $stmt->bindParam(2,$armario);
        $stmt->bindParam(3,$data_cadastro);
        $stmt->bindParam(4,$fromato);
        $stmt->bindParam(5,$origem);
        $stmt->bindParam(6,$bioma);
        $stmt->bindParam(7,$esp_id);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
?>