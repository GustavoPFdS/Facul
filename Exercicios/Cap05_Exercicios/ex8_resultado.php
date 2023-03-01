<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php  
    $nome=$_POST['nome'];
    $num=$_POST['numero'];
    $money=$_POST['money'];
    $meta_idade=floor($num/10);
    $meta_salario=($money*12)/5;
    $meta_emprestimo=$meta_idade*$meta_salario;

    if($num<20){
      echo "Menores de 20 recebem NADA.";
    }else{
      echo "Seu limite de empréstimo é de: $meta_emprestimo reais";
    }
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>