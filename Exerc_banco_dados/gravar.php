<?php $servername = "localhost";$username = "root"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if ($salario_bruto > 1550) {
    $inss = $salario_bruto * 0.11;
 
}else {
    $inss = 0;
}

        VALUES ('$nome', '$data', '$cargo', '$qtde_salarios', '$salario_bruto', '$inss', '$salario_liquido')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Funcionário cadastrado com sucesso!'); window.location.href='home_funcionarios.php';</script>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
$conn->close();?>