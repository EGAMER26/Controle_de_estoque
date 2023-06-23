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
    <style>
        .cadastroProdWrapperInputBox {
            display: flex;
            flex-direction: column;
            gap: 6rem;
        }
    </style>
</head>
<body>
    <div class="wrapper_login">
        <div class="title">
            <h1>CADASTRO DE PRODUTO</h1>
        </div>
        <div class="login form_cadastro_produto">
            <img width="64" src="/assets/coppio_logo.png" alt="logo coppio">
            <form action="cadastro_produto.php" method="post">
                    <div class="cadastroProdWrapperInputBox">
                        <div class="inputBox">
                            <input type="text" name="nome_prod_txt" required id="inputUser">
                            <label for="nome_prod_txt" class="labelInput">Nome do Item</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="desc_prod" required id="inputUser">
                            <label for="desc_prod" class="labelInput">Descrição</label>
                        </div>
                                        <div class="qtd_nota">
                        
                                        <div class="inputBox">
                                            <input type="number" name="qtd_prod" required id="inputUser">
                                            <label for="qtd_prod" class="labelInput">Quantidade</label>                   
                                        </div>
                                       
                                        <div class="inputBox">
                                            <input type="number" name="nota_fiscal" required id="inputUser">
                                            <label for="nota_fiscal" class="labelInput">Nota Fiscal</label>
                        
                                        </div>
                        
                                        </div>
                                        <div class="inputBox">
                                            <input type="text" name="fornecedor_prod" required id="inputUser">
                                            <label for="fornecedor_prod" class="labelInput">Fornecedor</label>                    
                                        </div>
                                        <div style="text-align: center;" class="inputBox">
                                            <label for="data" class="">Data de chegada</label>                   
                                            <input style="text-align: center;" type="date" name="data_prod" required id="inputUser">
                                        </div>
                    </div>

                <input type="submit" value="cadastrar" id="cadastro_prod">
            </form>
        </div>

    </div>
</body>
</html>