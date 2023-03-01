<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php  
    $nomes=array($_POST['nome1'],$_POST['nome2'],$_POST['nome3'],$_POST['nome4'],$_POST['nome5'],$_POST['nome6'],$_POST['nome7'],$_POST['nome8'],$_POST['nome9'],$_POST['nome10']);
    $nums = array($_POST['numero1'],$_POST['numero2'],$_POST['numero3'],$_POST['numero4'],$_POST['numero5'],$_POST['numero6'],$_POST['numero7'],$_POST['numero8'],$_POST['numero9'],$_POST['numero10']);
    $sum=0;
    foreach ($nums as $num) {
      $sum=$num+$sum;
    }
    $sum=$sum/10;
    echo "A média é de $sum<br>";
    echo "Nomes dos abaixo da média:";
    for($i=0;$i<=9;$i++){
      if($nums[$i]<$sum){
        echo "<br>$nomes[$i]";
      }
    }
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>