<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;400;700;900&display=swap" rel="stylesheet">

    <title>Cadastro De Usuario</title>
</head>
<body>
    <div class="wrapper_login">
        <div class="login">
            <img width="64" src="/assets/coppio_logo.png" alt="logo coppio">
            <form action="cadastro_usuario.php" method="post">

                <input type="text" name="nome_txt" id="email" placeholder="Nome">
                <input type="email" name="email_txt" required id="email" placeholder="E-mail">
                <input type="password" name="senha_txt" required id="senha" placeholder="Senha">
                <input type="submit" value="Logar" id="input_logar">
            </form>
        </div>

    </div>
</body>
</html>