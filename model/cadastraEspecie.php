<?php
function criaEspecie($familia, $genero, $nomeCient, $nomeVulgar, $PDO){
    try{
        
        $sql = "insert into especie (familia, genero, especie_esp, nome_vulgar) values (?,?,?,?)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$familia);
        $stmt->bindParam(2,$genero);
        $stmt->bindParam(3,$nomeCient);
        $stmt->bindParam(4,$nomeVulgar);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }

}
?>