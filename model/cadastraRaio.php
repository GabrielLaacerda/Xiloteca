<?php
function criaRaio($tipo,$PDO){
    try{
        
        $sql = "insert into raio (tipo) values (?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$tipo);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
function criaCaracRaio($idRaio,$nome,$PDO){
    try{
        
        $sql = "insert into carac_raio (nome, fk_raio_id) values (?,?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$nome);
        $stmt->bindParam(2,$idRaio);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
?>