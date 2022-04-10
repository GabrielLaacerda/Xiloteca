<?php
function criaCaracEspecial($descricao, $PDO){
    try{
        
        $sql = "insert into caracteres_especiais (descricao) values (?)";
        $stmt = $PDO->prepare($sql);

        $stmt->bindParam(1,$descricao);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
?>