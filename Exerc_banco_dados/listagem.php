<?php $servername = "localhost";$username = "root";$password = "";$dbname = "Folha_Pagto";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
$sql = "SELECT * FROM tb_funcionarios";$result = $conn->query($sql);?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Funcionários</title>
    <style>
        table { width: 90%; margin: 40px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }        th { background-color: #28a745; color: white; }        a { color: red; text-decoration: none; }
        body { font-family: Arial; background-color: #f8f9fa; }    </style>
</head>
<body>
    <h2 style="text-align:center;">Funcionários Cadastrados</h2>
    <table>
        <tr>
            <th>Nº Registro</th>
            <th>Nome</th>
            <th>Data Admissão</th>
            <th>Cargo</th>
            <th>Qtde Salários</th>
            <th>Salário Bruto</th>
            <th>INSS</th>
            <th>Salário Líquido</th>
            <th>Ações</th>
        </tr>
        <?phpif ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['N_Registro']."</td>
                        <td>".$row['Nome_Funcionario']."</td>
                        <td>".$row['data_admissao']."</td>
                        <td>".$row['cargo']."</td>
                        <td>".$row['qtde_salarios']."</td>
                        <td>R$ ".number_format($row['salario_bruto'],2,',','.')."</td>
                        <td>R$ ".number_format($row['inss'],2,',','.')."</td>
                        <td>R$ ".number_format($row['salario_liquido'],2,',','.')."</td>
                        <td><a href='excluir.php?id=".$row['N_Registro']."' onclick=\"return confirm('Deseja realmente excluir?')\">Excluir</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Nenhum funcionário cadastrado.</td></tr>";
        }
        $conn->close();
        ?>    </table>
    <div style="text-align:center;">
        <a href="home_funcionarios.php" style="color:blue;">Voltar ao Cadastro</a>
    </div>
</body>
</html>