<?php
session_start();
print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_session['email']);
    unset($_session['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;400;700;900&display=swap" rel="stylesheet">
    <title>Login</title>
</head> 
<body style="background-color: black;">
    <div class="sla" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <h1 style="color: white;">SISTEMA.php</h1>
    </div>
</body>
</html>