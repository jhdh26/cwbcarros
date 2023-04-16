<?php
session_start();
include_once ("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);

$result_usuario = "INSERT INTO tab_usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_insert_id($mysqli)) {
    $_SESSION['msg'] = "Usuario cadastrado com sucesso";
    header("Location: index.php");
}else{
    header("Location: index.php");
}

?>


