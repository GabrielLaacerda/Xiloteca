<?php
if (!isset( $_SESSION ) ) 
{ 
    session_start();
}
$login = $_POST['inputEmail'];
$senha = $_POST['inputPassword'];
if($login != "administrador" || $senha != "admin"){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    // unset ($_SESSION['login']);
    // unset ($_SESSION['senha']);
    header("Location: ../View/index.php");
}else if($login != "convidado" || $senha != "123"){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    // unset ($_SESSION['login']);
    // unset ($_SESSION['senha']);
    header("Location: ../View/index.php");
}else{
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header("Location: ../View/index.php");
}
?>