<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php  
    $nome=$_POST['nome'];
    $num=$_POST['opcao'];
    echo "$nome, você votou em: $num";
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>