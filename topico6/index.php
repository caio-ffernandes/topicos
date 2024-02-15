<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site do Caio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Site do Caio</h1>

    <div id="pokemon-info">
        Carregando informações do Pokémon...
    </div>

    <button onclick="window.location.href='caio.php'">Ir para Caio</button>

    <script>
        fetch('https://pokeapi.co/api/v2/pokemon/vaporeon')
            .then(response => response.json())
            .then(data => {
                const pokemonInfo = document.getElementById('pokemon-info');
                pokemonInfo.innerHTML = `
                    <h2>${data.name} O melhor pokemon</h2>
                    <img src="${data.sprites.front_default}" alt="${data.name}">
                    <p>Peso: ${data.weight}</p>
                    <p>Altura: ${data.height}</p>
                `;
            })
            .catch(error => {
                console.error('Erro ao carregar informações do Pokémon:', error);
            });
    </script>
</body>
</html>
