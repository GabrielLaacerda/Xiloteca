<?php
function criaParenquima($tipo,$PDO){
    try{
        
        $sql = "insert into parenquima (tipo) values (?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$tipo);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
function criaCaracParenquima($idParenquima,$nome,$PDO){
    try{
        $sql = "insert into carac_parenquima (nome, fk_parenquima_id) values (?,?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$nome);
        $stmt->bindParam(2,$idParenquima);
        $stmt->execute();
    }catch(PDOException $erro){
        echo $erro;
    }

}
?>