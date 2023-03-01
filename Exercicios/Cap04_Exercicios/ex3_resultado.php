<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php     
  function tabuada($num){
    for($i=1;$i<=10;$i++){
      echo "$num x $i = " . ($num*$i) . "<br>";
    }
  }
  $numero = $_POST["numeros"];
  tabuada($numero);
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>