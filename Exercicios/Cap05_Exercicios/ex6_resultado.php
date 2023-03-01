<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php     
  $numero = $_POST["numero"];
  if(isset($_POST["par"])){
    if($numero%2==0){
      echo "O número $numero é par<br>";
    }else{
      echo "O número $numero não é par<br>";
    }
  }

  $f=1;
  if(isset($_POST["fatorial"])){
    for ($i=1; $i <= $numero; $i++) {  
      $f = $f * $i;  
    }
    echo "O número $numero fatorial é: $f";
  }
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>