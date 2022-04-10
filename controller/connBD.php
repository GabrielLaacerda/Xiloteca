<?php
// class Conexao{
//     protected static $conexao;
//         private function __contruct(){
//             self::$conexao = new PDO("pgsql:host=localhost;dbname=xiloteca", "postgres", "toor123");
//             self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         }
//         public static function getConexao(){
//             if(!self::$conexao)
//                 new Conexao();
//             return sel
//         }
// }
if (!isset( $_SESSION ) ) 
{ 
    session_start();
}
    $usuario = $_SESSION["login"];
    $senha = $_SESSION['senha'];
    try {
        $PDO = new PDO("pgsql:host=localhost;dbname=xiloteca", "$usuario", "$senha");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>