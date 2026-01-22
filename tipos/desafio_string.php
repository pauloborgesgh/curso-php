<div class="tittle"><h1>Desafio String</h1></div>


<?php


//!AbcaBCaBC
$palavra = "!AbcaBcabc"; 
//Avaliando os metodos da documentação da string
//qual metodo qie a posicao do texto 'abc'
///na string '!AbcaBcabc' retorne 1?

$texto = stripos($palavra,'abc');
echo 'posição'. ' ' .$texto;




?>