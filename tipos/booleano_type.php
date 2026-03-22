<div class="tittle"><h1>Booleano</h1></h1></div>


<?php

$v = true; //1
echo TRUE;
echo '<br>';
echo FALSE;
echo '<br>';
$f = false; //0



if($v) {
    echo '<br>'.TRUE;
} else {
    echo '<br>'.False;
}

// conversão de booleano
echo '<p>Regras</p>';
echo '<br>'.var_dump((bool) 0); //false // apenas zero sera considerado falso

echo '<br>'.var_dump((bool) 20); //true



?>