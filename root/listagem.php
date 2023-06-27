<?php 
include_once ('conexao.php');

$sql = "SELECT * FROM produtos";
$resultado = $conexao->query($sql);

if($resultado){
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem</title>
        <style>

        </style>
    </head>
    <body>
        <main>
            <center>
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th>Nota Fiscal</th>
                        <th>Fornecedor</th>
                        <th></th>
                    </tr>
                </table>
            </center>
        </main>
        
    </body>
    </html>
    <?php
}


?>