<?php
  
    require_once('topo.php');
?>
 <link rel="stylesheet" href="style.css">
<div>
   
    <?php require_once('menu.php'); ?>
</div>

<div>
    <h2>Calcular Média de 20 Números</h2>
    <?php
      
        function calcularMedia($numeros) {
            $soma = array_sum($numeros);
            $media = $soma / count($numeros);
            return $media;
        }

 
        $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);


        $media = calcularMedia($numeros);
        echo "A média dos números é: " . $media;
    ?>
</div>

<div>
 
    <?php require_once('rodape.php'); ?>
</div>
