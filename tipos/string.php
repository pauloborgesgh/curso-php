<div class="tittle">
  <h1>Tipo String</h1> 
</div>

<?php
$text = "abacate";
echo var_dump($text);
if(gettype($text) === "string"){
  echo "Ola Mundo PHP";
  echo " É uma string", "  ", gettype($text);

}else {
  echo "toString($text;), <br>";
  echo "convetido para string  tipo real:" ." ", gettype($text);

}
// algumas funções com string

echo'<br>' . strtoupper('maximizado');// deixa tudo maiusculo
echo'<br>' . strtolower('MINIMIZADO');// deixa tudo minusculo
echo'<br>' . ucfirst('primeira letra maiuscula');
echo'<br>' . ucwords('todas as palavras com a primeira letra maiuscula');
echo'<br>' . strlen('quantidade de caracteres');// conta a quantidade de caracteres
echo'<br>' . mb_check_encoding($text);
echo'<br>' . mb_strlen('ver caracteres com acénto',"utf-8");// conta a quantidade de caracteres com acento
echo'<br>' . substr($text,1,4); // recorta a string a partir do indice indicado
echo'<br>' . str_replace('abacate','vitamina de abacate',$text); // substitui uma palavra por outra na string sendo o primeiro parametro a palavra a ser substituida, o segundo a palavra nova e o terceiro a variavel que contem a string
echo'<br>' . str_repeat('php ',5); // repete a string o numero de vezes indicado no segundo parametro
echo'<br>' . trim('   texto com espaços ' ); // remove os espaços em branco no inicio e no final da string
echo'<br>' . ltrim('   texto com espaços'); // remove os espaços
echo'<br>' . rtrim('texto com espaços   '); // remove os espaços
echo'<br>' . strpos('localizar a posição da palavra na string','palavra'); // informa a posição inicial da palavra na string
echo'<br>' . stripos('localizar a posição da palavra na string','PALAVRA'); // informa a posição inicial da palavra na string ignorando maiusculas e minusculas
echo'<br>' . strrpos('localizar a posição da palavra na string palavra','palavra'); // informa a posição inicial da ultima ocorrência da palavra na string
echo'<br>' . strripos('localizar a posição da palavra na string PALAVRA','palavra'); // informa a posição inicial da ultima ocorrência da palavra na string ignorando maiusculas e minusculas
echo'<br>' . strstr('localizar a palavra na string','palavra'); // retorna
echo'<br>' . stristr('localizar a PALAVRA na string','palavra'); // retorna ignorando maiusculas e minusculas
echo'<br>' . chr(abc); // retorna o caractere referente ao codigo ascii




?>