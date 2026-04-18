<div class="titulo">Operações aritméticas</div>

<?php

echo 1+1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1+1.5,'<br>';
echo 10-3, '<br>';
echo 2*5, '<br>';
echo 7/4, '<br>';
echo intdiv(7,4), '<br>'; //divisão inteira
echo round(7/4), '<br>'; //arredondar
echo 7%4, '<br>'; //resto da divisão
echo 7%3, '<br>';
echo 8%2, '<br>';
echo 7/0.000001, '<br>'; //explicação embaixo!
/*
No php 7, a divisão por 0 resultava em "INF", mas no 8(o usado), ele n retorna esse valor. Ele gera um erro (no 7 tmb mas enfim..)!
Quando um número é divido por algo como 0.000001, ele retorna 7000000. N vou saber explicar bem kkkk
*/
echo 4**2, '<br>'; //potência

//Precedência de operadores:
echo '<p> Precedência </p>';
echo 2 + 3 * 4, '<br>';
echo (2+3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2+3)*4)**2, '<br>';


?>