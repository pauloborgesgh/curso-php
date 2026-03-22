<div class="tittle"><h1>Variáveis</h1></div>

<?php 

$texto = 'Olá Mundo !';
$numero = 1234;
$lista = [  'PHP', 'JavaScript', 'Python'];
$bool = true;

echo $texto.'<br>';
echo $numero.'<br>';
print_r($lista).'<br>';
var_dump($lista);
echo '<br>';
var_dump($bool);
echo $bool;

$_COOKIE['user'] = 'coderphp';
echo '<br>'.$_COOKIE['user'];

var_dump($_COOKIE);


$st = $texto;
echo '<br>'.$texto;

if(in_array('PHP', $lista)) {
    echo '<br>PHP está na lista';

}else{
    print_r('PHP não está na lista');
}   
echo '<br>';
var_dump($lista[2]);


?>