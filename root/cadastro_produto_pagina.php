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

    <title>Cadastro de produto</title>
</head>
<body>
    <div class="wrapper_login">
        <div class="login">
            <img width="64" src="/assets/coppio_logo.png" alt="logo coppio">
            <form action="cadastro_produto.php" method="post">
                    <div class="">
                        <p>Nome</p>
                                        <input type="text" name="nome_prod_txt" id="email" placeholder="Nome do Produto">
                    </div>
                <input type="search" name="desc_prod" required id="email" placeholder="Descrição">
                <div class="qtd_nota">

                    <input type="number" name="qtd_prod" required id="senha" placeholder="qtd:">
                    <input type="number" name="nota_fiscal" required id="senha" placeholder="Nota Fiscal:">
                </div>
                <input type="text" name="fornecedor_prod" required id="email" placeholder="Fornecedor">

                <input type="submit" value="cadastrar" id="input_logar">
            </form>
        </div>

    </div>
</body>
</html>