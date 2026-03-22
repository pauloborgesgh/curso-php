<div class="tittle"><h1>Conversão</h1></h1></div>


<?php


// conversão de tipos
echo '<p>Regras</p>';

echo is_int(PHP_INT_MAX);
var_dump(PHP_INT_MAX);
echo'<br>';
var_dump(PHP_INT_MAX+1);
echo'<br>';
var_dump((float)5.0);

$nota = (float)7.0;

echo'<br>'.$nota;
error_log("Isso é um log");
echo "Rodando script";
var_dump((int)5.0);
echo'<br>';
var_dump(intval('01001011001010',2)); //conversão de binário para inteiro