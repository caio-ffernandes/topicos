<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Arrays</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div>
        <h2>Adicionar e Remover Nomes</h2>
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            <button type="submit" name="adicionar">Adicionar</button>
            <button type="submit" name="remover">Remover</button>
        </form>
    </div>

    <div>
        <h2>Nomes</h2>
        <?php
        session_start(); 
        if (!isset($_SESSION['nomes'])) {
            $_SESSION['nomes'] = [];
        }

    
        if (isset($_POST['adicionar']) && !empty($_POST['nome'])) {
            $nome = $_POST['nome'];
            array_push($_SESSION['nomes'], $nome); 
        }

    
        if (isset($_POST['remover']) && count($_SESSION['nomes']) > 0) {
            array_pop($_SESSION['nomes']); 
        }

     
        if (!empty($_SESSION['nomes'])) {
            echo '<ul>';
            foreach ($_SESSION['nomes'] as $nome) {
                echo '<li class="addnome">' . $nome . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>Nenhum nome adicionado ainda.</p>';
        }
        ?>
    </div>
</body>
</html>
