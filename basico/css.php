<div class="titulo">integração CSS</div>

<h1 center>
<?php
echo 'Olá ';
echo '<small>';
echo 'mundo';
echo '</small>';
?>


</h1>

<?= "<div center> Outra forma de me 'expressar'! </div>" ?>

<br>
<div center>
<button dobro><?= "Botão" ?></button></div>

<style>
    button{
        padding: 5px 20px;
        background-color: #9c27b0;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #4286f4;
    }

    [dobro]{
        font-size: <?= 10-8 ?>rem;
    }

</style>