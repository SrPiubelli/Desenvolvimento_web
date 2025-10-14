<?php $servername = "localhost";$username = "root";$password = "";$dbname = "Folha_Pagto";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
$id = $_GET['id'];
$sql = "DELETE FROM tb_funcionarios WHERE N_Registro = $id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Funcionário excluído com sucesso!'); window.location.href='listagem.php';</script>";
} else {
    echo "Erro ao excluir: " . $conn->error;
}
$conn->close();?>