<div class="tittle">
  <h1>Operação Aritimeticas</h1>
</div> 


<?php 
echo "Operação com tipos <br>";

echo 11 + 11,'<br>';

$resultado = 1655.585*4898.989;
echo 'resultado: ' . round($resultado),'<br>';
echo 1655.585 * 4898.989,'<br>';
$args_1 = 3;
$args_2 = 2;
function mensagem() {
    return "Olá, isso veio do PHP!";
}
?>
<ul>
  <li>Adição: <?= $args_1 + $args_2 ?></li>
  <li>Subtração: <?= $args_1 - $args_2 ?></li>
  <li>Multiplicação: <?= $args_1 * $args_2 ?></li>
  <li>Divisão: <?= $args_1 / $args_2 ?></li>
  <li>Módulo: <?= $args_1 % $args_2 ?></li>
  <li>Mensagem: <?= mensagem() ?></li>

</ul>