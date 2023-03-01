<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php     
  $numero = $_POST["numero"];
  $operacao = $_POST["operacao"];


  if($operacao == "dobro"){
    $resultado= $numero*2;
  }else if($operacao=="cubo"){
    $resultado=$numero*$numero*$numero;
  }else{
    $resultado=sqrt($numero);
  }
    echo "<p>Resultado da operação <h3> $operacao </h3> em <h3> $numero </h3>=<h3> $resultado </h3></p>";
    
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>