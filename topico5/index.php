<?php
include 'conectDB.php';

$nome = $email = $senha = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    if ($stmt->execute()) {
        $mensagem = "Novo usuário inserido com sucesso!";
    } else {
        $mensagem = "Erro ao inserir novo usuário.";
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
        <input type="text" id="nome" name="nome" required value="<?php echo htmlspecialchars($nome); ?>">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($email); ?>">

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <input class="enviar" type="submit" value="Cadastrar">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Dados inseridos:</h3>";
        echo "Nome: " . htmlspecialchars($nome);
        echo "Email: " . htmlspecialchars($email);
        echo " Sem mostrar senha por segurança";
    }
    ?>

    <?php echo $mensagem; ?>

</body>
</html>
