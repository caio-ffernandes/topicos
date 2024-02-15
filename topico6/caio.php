<?php

$dados = array(
    'nome' => 'Caio',
    'idade' => 16,
    'ocupacao' => 'Amigo do Samuel',
    'email' => 'caio.fenandes@portalsesisp.org.br'
);


header('Content-Type: application/json');


echo json_encode($dados);
?>