<div class="tittle">
  <h1>Integração Com CSS</h1>
</div> 

<h1 center></h1>
<?php 
echo "Olá PHP com HTML!";

?>
<?= "<h4>Mais uma forma de integrar HTML com PHP Aplicando Css</h4>" ?>

<br>
<div center ><button dobro><?= "Botão PHP"; ?></button> </div>

<style>
  button{
    padding: 5px 15px;
    background-color: #4CAF50;
      color: white;
      font-weight:bold;
      border-radius:10px;
  }
  [center]{
    display: flex;
    text-align: center;
    justify-content: center;
  }
  [azul]{
    background-color: #295e3a;
    border-radius: 15px;
  }
  [dobro]{
    font-size:2em;
    }
</style>