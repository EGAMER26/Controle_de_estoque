<?php

$conn = new mysqli('127.0.0.1', 'root', 'usbw', 'controle_estoque');

    if ($conn->connect_error) {
        die('Erro na conexão: ' .$conn->connect_error);
    }

    $nome = $_POST['nome_txt'];
    $email = $_POST['email_txt'];
    $senha = $_POST['senha_txt'];

    $tryEmail = "SELECT * FROM usuarios WHERE email_usuario = ?";
    $stmt = $conn->prepare($tryEmail);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        echo "<script>";
        echo "alert('Email já cadastrado!);";
        echo "window.location.reload();";
        echo "</script>";
    } else {
        $sql = "INSERT INTO usuarios (id_usuario, nome_usuario, email_usuario, senha_usuario) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $next_id, $nome, $email, $senha);
    if ($stmt->execute()) {
        echo "<script>";
        echo "alert('Funcionário cadastrado!');";
        echo "window.open('http://localhost:8080/produtos.php/', '_self');";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Erro ao cadastrar o funcionário!');";
        echo "</script>";
    }
    }

    $conn->close();

?>