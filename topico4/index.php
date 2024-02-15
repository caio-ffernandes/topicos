<?php
include 'conectDB.php';

$nome = $email = $senha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário inserido com sucesso! ";
        echo "Nome: $nome ";
        echo "Email: $email ";
        echo "Senha: $senha ";
    } else {
        echo "Erro ao inserir novo usuário: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cadastrar Novo Usuário</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <input class="enviar" type="submit" value="Cadastrar">
    </form>

    <?php
    $conn->close();
    ?>
</body>
</html>
