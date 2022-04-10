<?php
    if($_FILES){
        $arquivo = $_POST['fotografia'];
        $local = "../View/imagensAplic/test.png";
        move_uploaded_file($arquivo['tmp_name'], $local);
    }
?>