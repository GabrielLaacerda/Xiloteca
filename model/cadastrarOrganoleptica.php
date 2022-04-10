<?php
function criaOrganoleptica($odor,$gosto,$brilho,$textura,$cor,$PDO){
    try{
        
        $sql = "insert into organolepticas (odor, gosto, brilho,textura,cor) values (?,?,?,?,?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$odor);
        $stmt->bindParam(2,$gosto);
        $stmt->bindParam(3,$brilho);
        $stmt->bindParam(4,$textura);
        $stmt->bindParam(5,$cor);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
?>