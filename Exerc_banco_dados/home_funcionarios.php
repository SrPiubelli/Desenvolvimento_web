<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionários</title>
    <style>
        body { font-family: Arial; background-color: #f5f5f5; }
		form { background: white; padding: 20px; width: 400px; margin: 50px auto; border-radius: 10px; box-shadow: 0 0 10px #ccc; }        input, select { width: 100%; margin-bottom: 10px; padding: 8px; }
        button { background-color: #28a745; color: white; padding: 10px; border: none; width: 100%; border-radius: 5px; }        a { display: block; text-align: center; margin-top: 15px; color: #007bff; text-decoration: none; }    </style>
</head>
<body>
    <form action="gravar.php" method="POST">
        <h2>Cadastro de Funcionários</h2>
        <label>Nome do Funcionário:</label>
        <input type="text" name="nome" required>

        <label>Data de Admissão:</label>
        <input type="date" name="data_admissao" required>

        <label>Cargo:</label>
        <input type="text" name="cargo">

        <label>Quantidade de Salários:</label>
        <input type="number" name="qtde_salarios" required>

        <label>Salário Bruto (R$):</label>
        <input type="number" step="0.01" name="salario_bruto" required>

        <button type="submit">Cadastrar</button>
        <a href="listagem.php">Ver Funcionários Cadastrados</a>
    </form>
</body>
</html>