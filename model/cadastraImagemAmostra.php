<?php

function cadastraImagemAmostra($FotoA, $MAR, $MATan, $MATrans, $fkA, $PDO){
    try{
        
        $sql = "insert into fotos (link_amostra, fk_amostra_numero, ma_transversal,
        ma_radial,ma_tangencial) values (?,?,?,?,?)";
        
        if($MAR == ""){
            $MAR = null;
        }if($MATan == ""){
            $MATan = null;
        }
        if($MATrans == ""){
            $MATrans = null;
        }
        if($FotoA == ""){
            $FotoA = null;
        }
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$FotoA);
        $stmt->bindParam(2,$fkA);
        $stmt->bindParam(3,$MATrans);
        $stmt->bindParam(4,$MAR);
        $stmt->bindParam(5,$MATan);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }
   

}

?>