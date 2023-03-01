<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php  
    $nums = array($_POST['numero1'],$_POST['numero2']);
    sort($nums);
    for($i=$nums[0]+1;$i<$nums[1];$i++){
      if($i % 2==0){
        echo "$i ";
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