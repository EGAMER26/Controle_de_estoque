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
    <title>Login</title>

    <style>
        .wrapperInputBox {
            display: flex;
            flex-direction: column;
            gap: 6rem;
        }
    </style>
</head>
<body>
    <div class="wrapper_login">
        <div class="login">
            <img width="64" src="/assets/coppio_logo.png" alt="logo coppio">
            <form action="login_autenticacao.php" method="POST">
                
                <div class="wrapperInputBox">
                    <div class="inputBox">
                        <input type="text" name="email_txt" required class="email" id="inputUser" placeholder="" >
                        <label for="email_txt" class="labelInput">E-mail</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="senha_txt" required class="senha" id="inputUser" placeholder="">
                        <label for="senha_txt" class="labelInput">Senha</label>
                    </div>
                </div>
                <input type="submit" name="submit" value="submit" id="input_logar">
            </form>
        </div>

    </div>
</body>
</html>