<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php  
    $nome=$_POST['nome'];
    $num=$_POST['numero'];
    if($num>=16){
      echo "$nome, você pode votar";
    }else{
      echo "$nome, você não pode votar";
    }
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>