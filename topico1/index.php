<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Par ou Ímpar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <form method="post">
            <label for="numero">Digite um número:</label>
            <input type="text" id="numero" name="numero">
            <button class="botao" type="submit">Verificar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            if (!empty($numero) && is_numeric($numero)) {
                if ($numero % 2 == 0) {
                    echo "<p>O número $numero é par.</p>";
                } else {
                    echo "<p>O número $numero é ímpar.</p>";
                }
            } else {
                echo "<p>Por favor, insira um número válido.</p>";
            }
        }
        ?>
    </div>
    <div class="numeros">
        <h2>Números de 1 a 100</h2>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "<div class='numero'>$i</div>";
        }
        ?>
    </div>
</body>
</html>
