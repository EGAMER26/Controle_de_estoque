    <?php 

$conn = new mysqli('127.0.0.1', 'root', 'usbw', 'controle_estoque');

$nome_prod = $_POST['nome_prod_txt'];
$descri_prod = $_POST['descricao_prod'];
$qtd_prod = $_POST['qtd_prod'];
$nota_fiscal = $_POST["nota_fiscal"];
$fornecedor = $_POST['fornecedor_prod'];
$data = $_POST['data_prod'];

$sql = "INSERT INTO material (nome_produto, desc_produto, valor_produto, nota_fiscal, forncedor, data_chegada) VALUES ('$nome_prod', '$descri_prod', '$qtd_prod', '$nota_fiscal', '$fornecedor', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "<script>";
    echo "alert('Produto cadastrado!');";
    echo "window.open('http://localhost:8080/produtos.php/', '_self');";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('Erro ao cadastrar o produto!');";
    echo "</script>";
}

$conn->close();


    ?>