<?php
function criaVaso($tipo,$PDO){
    try{
        
        $sql = "insert into tipo_dado_vasos (nome) values (?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$tipo);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
function criaCaracVaso($idVaso,$caracv,$PDO){
    try{
        $sql = "insert into carac_vasos (nome, fk_tipo_dado_vasos_id) values (?,?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$caracv);
        $stmt->bindParam(2,$idVaso);
        $stmt->execute();
    }catch(PDOException $erro){
        echo $erro;
    }

}
function criaDefinVaso($idCaracVaso, $definv, $PDO){
    try{
        $sql = "insert into defin_vasos (nome, fk) values (?,?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$definv);
        $stmt->bindParam(2,$idCaracVaso);
        $stmt->execute();
    }catch(PDOException $erro){
        echo $erro;
    }

}
?>