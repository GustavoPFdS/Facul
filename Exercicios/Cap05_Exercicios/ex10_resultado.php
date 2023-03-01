<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php
      function relatorio($questoes){
        $i=0;
        $acertos=0;
        foreach($questoes as $questao){
          $i++;
          if($questao=="trouxa"){
            echo "A Questão $i não foi respondida<br>";
          }elseif($questao=="Resposta Certa"){
            $acertos++;
            echo "A Questão $i está correta<br>";
          }else{
            echo "A Questão $i está incorreta<br>";
          }
        }
        $acertos=($acertos*100)/5;
        echo "A porcentagem de acertos é de $acertos%";
      }
      
      $nomes=array("Questao1","Questao2","Questao3","Questao4","Questao5");
      $questoes=array();  
      foreach($nomes as $nome){
        if(isset($_POST[$nome])){
            array_push($questoes,$_POST[$nome]);
        }else{
            array_push($questoes,"trouxa");
          }
        }
      relatorio($questoes);
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>