<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Geologica:wght@100;200;400;700;900&display=swap" rel="stylesheet">
    <title>Cadastro de produto</title>
</head>
<body>
    <div class="wrapper_login">
        <div class="title">
            <h1>CADASTRO DE PRODUTO</h1>
        </div>
        <div class="login form_cadastro_produto">
            <img width="64" src="/assets/coppio_logo.png" alt="logo coppio">
            <form action="cadastro_produto.php" method="post">
                    <div class="div_nome all_divs_form_cadastro_prod">
                        <p>Nome</p>
                        <input type="text" name="nome_prod_txt" id="email" placeholder="">
                    </div>
                    <div class="div_desc all_divs_form_cadastro_prod">
                        <p>Descrição</p>
                        <input type="search" name="desc_prod" required id="email" placeholder="">
                    </div>
                <div class="qtd_nota">

                <div class="div_qtd all_divs_form_cadastro_prod">
                    <p>Quantidade</p>
                    <input type="number" name="qtd_prod" required id="senha" placeholder="">
                </div>
                <div class="div_notaFiscal all_divs_form_cadastro_prod">
                    <p>Nota Fiscal</p>
                    <input type="number" name="nota_fiscal" required id="senha" placeholder="">

                </div>

                </div>
                <div class="div_fornecedor all_divs_form_cadastro_prod">
                    <p>Fornecedor</p>
                    <input type="text" name="fornecedor_prod" required id="email" placeholder="">
                </div>

                <input type="submit" value="cadastrar" id="cadastro_prod">
            </form>
        </div>

    </div>
</body>
</html>