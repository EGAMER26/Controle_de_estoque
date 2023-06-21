<?php 
session_start();

if(isset($_POST['submit']) || !empty($_POST['email_txt']) || !empty($_POST['senha_txt']))
{

    include_once('conexao.php');
    $email = $_POST['email_txt'];
    $senha = $_POST['senha_txt'];

    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' and senha_usuario = '$senha'";

    $result = $conexao->query($sql);


    if(mysqli_num_rows($result) < 1)
    {
    echo "<script>";
    echo "alert('Email ou senha incorreto!');";
    echo "</script>";
    unset($_session['email']);
    unset($_session['senha']);
    echo "<script>";
    echo "window.open('http://localhost:8080/login.php', '_self');";
    echo "</script>";
    }
    else {
        echo "<script>";
        echo "alert('Logado com sucesso!');";
        echo "</script>";
        echo "<script>";
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        echo "window.open('http://localhost:8080/sistema.php', '_self');";
        echo "</script>";
    }
} else {
    header('location: nao_deu_certo.php');
}


?>