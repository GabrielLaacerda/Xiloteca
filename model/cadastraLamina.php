<?php
function criaLamina($gaveta, $armario, $id_amos, $PDO){
    try{
        
        $sql = "insert into lamina(gaveta, armario, fk_amostra_numero) values (?, ?, ?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$gaveta);
        $stmt->bindParam(2,$armario);
        $stmt->bindParam(3,$id_amos);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
function criaIdentificacao($nomeVul, $familia, $genero, $especie, $idLamina, $PDO){
    try{
        
        $sql = "insert into identificacao(nome_vulgar, familia, genero, especie, fk_lamina_numero) values (?, ?, ?, ?, ?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$nomeVul);
        $stmt->bindParam(2,$familia);
        $stmt->bindParam(3,$genero);
        $stmt->bindParam(4,$especie);
        $stmt->bindParam(5,$idLamina);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
?>