<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php  
    $nome=$_POST['nome'];
    $num=$_POST['numero'];
    $info=$_POST['info'];
    $arquivo = fopen("ex7save.txt", "a") or die("Não deu certo");
    fwrite($arquivo, "Nome: ".$nome."\n");
    fwrite($arquivo, "Idade: ".$num."\n");
    fwrite($arquivo, "Segredo: ".$info."\n");
    fclose($arquivo);
    echo "Os dados foram salvos ;D";
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>