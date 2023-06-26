    <?php 

$conn = new mysqli('127.0.0.1', 'root', 'usbw', 'controle_estoque');
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// include_once ('cadastro_produto_pagina');
$nome_prod = $_POST['nome_prod_txt'];
$descri_prod = $_POST['descricao_prod'];
$qtd_prod = $_POST['qtd_prod'];
$nota_fiscal = $_POST["nota_fiscal"];
$fornecedor = $_POST['fornecedor_prod'];
$data = $_POST['data_prod'];

$sql = "INSERT INTO material (nome_produto, desc_produto, valor_produto, nota_fiscal, fornecedor, data_chegada) VALUES ('$nome_prod', '$descri_prod', '$qtd_prod', '$nota_fiscal', '$fornecedor', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "<script>";
    echo "alert('Produto cadastrado!');";
    echo "window.open('http://localhost:8080/cadastro_produto_pagina.php', '_self');";
    echo "</script>";
} else {
    // echo "<script>";
    // echo "alert('Erro ao cadastrar o produto!');";
    // echo "window.open('http://localhost:8080/cadastro_produto_pagina.php', '_self');";
    // echo "</script>";
    echo "Erro na consulta: " . $conn->error;
}

$conn->close();


    ?>