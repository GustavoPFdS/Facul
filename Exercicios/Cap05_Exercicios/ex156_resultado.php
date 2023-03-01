<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php
  date_default_timezone_set('America/Sao_Paulo');
  $data_hora = date('d/m/Y H:i:s');
  echo "$data_hora<br>";
  if(isset($_POST['codigo'])){
      echo "Código:".$_POST['codigo']."<br>";
  }else{
      echo "Código não foi recebido";
  }
  if(isset($_POST['nome'])){
      echo "Nome:".$_POST['nome']."<br>";
  }else{
      echo "Nome não foi recebido";
  }
  if(isset($_POST['faixa'])){
    echo "Faixa etária:".$_POST['faixa']."<br>";
  }else{
      echo "Faixa etária não foi recebido";
  }
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>