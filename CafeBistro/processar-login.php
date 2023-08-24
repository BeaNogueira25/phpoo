<?php
require "autenticacao.php";
require "conexao.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
    $senha= $_POST["senha"];

    $login= new autenticacao($conn);

    if($_login->verificarUsuario($email,$senha)){
         header("location: index.php");
    }else{
        header("Location: login.php?erro=1");
    }
}
?>