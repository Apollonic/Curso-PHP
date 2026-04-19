<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 4;
$b = 20;
$soma = $a + $b;
echo $soma;
echo '<br>';
echo isset($soma).(', ').('variável perde valor ->');
unset($soma);
echo '<br>';
echo isset($soma);

$var = 13;
echo '<br>';
var_dump($var);
echo '<br>';
$var = "agora uma string";
var_dump($var);
//as variáveis trocam de forma dinâmica (tipagem fraca)


?>