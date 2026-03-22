<div class="tittle"><h1>Desafio</h1></div>

<?php 

$eq1 = 6 * (3 + 2) ** 2;
    /// (3 * 2) - 1;
$eq2 = ((1-5) * (2 - 7) ** 2 );
    /// (1 - 3) * (2 - 7) ** 2; 

$resultado = ($eq1 - $eq2) ** 3 / 10 ** 3;
echo '<br> Resultado Primeria equação :'.$resultado;

$number = (150-100) / (10 ** 3);

$r2 = 50 **3/10**3;

echo '<br> Resultado Segunda equação :'.$number;
echo '<br> Resultado Terceira equação :'.number_format($r2,0,'.','' );

?>