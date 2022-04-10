<?php

    // include("../model/cadastraImagemLamina.php");
    include("../controller/connBD.php");

    // echo var_dump($_FILES["imagemLMRad"]);
    error_reporting(E_ALL);
    return $_FILES['file']['tmp_name'];
    if(isset($_FILES["imagemLMRad"])){
    $imagemMR = $_FILES["imagemLMRad"];
    

    $T = move_uploaded_file($imagemMR["tmp_name"], $imagemMR["name"]);
    if($T == true){
        echo "Deu certo";
    }else{
        echo "due errado";
    }
}
    // $MR = $_POST["mr"];
    // $MTan = $_POST["mtan"];
    // $MTrans = $_POST["mtrans"];
    // $fk = $_POST["fk_lamina"];

    // cadastraImagemLamina($MR, $MTan, $MTrans, $fk, $PDO);
    //header("Location: ../View/cadastros.php");

?>