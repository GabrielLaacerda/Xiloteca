<?php

function cadastraImagemLamina($MR, $MTan, $MTrans, $fk_lamina, $PDO){
    try{
        
        $sql = "insert into imagem_corte (mi_radial, mi_tangencial, mi_transversal,fk_lamina_numero) 
        values (?,?,?,?)";
        
        if($MR == ""){
            $MR = null;
        }if($MTan == ""){
            $MTan = null;
        }
        if($MTrans == ""){
            $MTrans = null;
        }
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(1,$MR);
        $stmt->bindParam(2,$MTan);
        $stmt->bindParam(3,$MTrans);
        $stmt->bindParam(4,$fk_lamina);
        $stmt->execute();

    }catch(PDOException $erro){
        echo $erro;
    }
   

}

?>