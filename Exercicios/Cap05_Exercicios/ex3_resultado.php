<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php  
    $nome=$_POST['nome'];
    $nums = array($_POST['numero1'],$_POST['numero2'],$_POST['numero3']);
    $menor=101;
    $maior=0;
    $sum=0;
    foreach ($nums as $num) {
      if($menor>$num){
        $menor=$num;
      }
      if($maior<$num){
        $maior=$num;
      }
      $sum=$num+$sum;
    }
    $sum=$sum/3;
    echo "$nome, sua maior nota é $maior, sua menor nota é $menor e sua média é $sum";
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>