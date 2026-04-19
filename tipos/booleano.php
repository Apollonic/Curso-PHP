<div class="titulo">Tipo booleano</div>

<?php 

echo TRUE;
echo '<br>';
echo false;

echo '<br>'. var_dump(TRUE);
echo '<br>'. var_dump(FALSE);
echo '<br>'. var_dump('false');
echo '<br>'. is_bool(TRUE);

//fazer as regras de conversões
echo '<p>Regras: </p>';
echo '<br>' . var_dump((bool) 0); //apenas 0 é false
echo '<br>'. var_dump((bool)20);
echo '<br>'. var_dump((bool)-1);
echo '<br>'. var_dump((bool)0.0);
echo '<br>'. var_dump((bool)0.00000001);
echo '<br>'. var_dump((bool)""); //false
echo '<br>'. var_dump((bool)"0"); //false e todo o resto é true
echo '<br>'. var_dump((bool)" ");



?>