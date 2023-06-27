<?php 
include_once ('conexao.php');

$sql = "SELECT * FROM material";
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
                        <th>Quantidade</th>
                        <th>Data de chegada</th>
                        <th>Nota Fiscal</th>
                        <th>Fornecedor</th>
                    </tr>
                    <?php 
                        while ($linha = $resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td align="center"><?php echo $linha['nome_produto']; ?></td>
                        <td align="center"><?php echo $linha['desc_produto']; ?></td>
                        <td align="center"><?php echo $linha['qtd_produto']; ?></td>
                        <td align="center"><?php echo $linha['data_chegada']; ?></td>
                        <td align="center"><?php echo $linha['nota_fiscal']; ?></td>
                        <td align="center"><?php echo $linha['fornecedor']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </center>
        </main>
        
    </body>
    </html>
    <?php
}else {
    echo "Erro ao obter os dados: " . $conexao->error;
}
$conexao->close();

?>