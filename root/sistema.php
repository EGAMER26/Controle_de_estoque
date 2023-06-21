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