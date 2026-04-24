<div class="titulo">Desafio equação</div>

<?php 

$passo1 = (6*(3+2))**2;
$passo2 = 3*2;

$esquerda = $passo1/$passo2;

$direita1 = ((1-5)*(2-7))/2;
$direita2 = $direita1**2;

$passo3 = ($esquerda-$direita2)**3;
$passo4 = $passo3/(10**3);

echo $passo4;

?>