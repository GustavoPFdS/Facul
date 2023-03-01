<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php
    function getCapitalByEstado($estado) {
      $geo['Acre']               = "Rio Branco";
      $geo['Alagoas']            = "Maceió";
      $geo['Amapá']              = "Macapá";
      $geo['Amazonas']           = "Manaus";
      $geo['Bahia']              = "Salvador";
      $geo['Ceará']              = "Fortaleza";
      $geo['Espírito Santo']     = "Vitória";
      $geo['Goiás']              = "Goiania";
      $geo['Maranhão']           = "São Luis";
      $geo['Mato Grosso']        = "Cuiabá";
      $geo['Mato Grosso Do Sul'] = "Campo Grande";
      $geo['Minas Gerais']       = "Belo Horizonte";
      $geo['Pará']               = "Belém";
      $geo['Paraiba']            = "João Pessoa";
      $geo['Paraná']             = "Curitiba";
      $geo['Pernambuco']         = "Recife";
      $geo['Piauí']              = "Terezina";
      $geo['Rio De Janeiro']     = "Rio de Janeiro";
      $geo['Rio Grande Do Norte']= "Natal";
      $geo['Rio Grande Do Sul']  = "Porto Alegre";
      $geo['Rondonia']           = "Porto Velho";
      $geo['Roraima']            = "Boa Vista";
      $geo['Santa Catarina']     = "Florianópolis";
      $geo['Sao Paulo']          = "Sao Paulo";
      $geo['Sergipe']            = "Aracaju";
      $geo['Tocantins']          = "Palmas";
    
        
        $estado = ucwords(strtolower($estado));
        
        if (isset($geo[$estado])) {
          return $geo[$estado];
        } else {
          return 'desconhecida';
        }
      }
      
    $estado=getCapitalByEstado($_POST['estado']);
    echo "<p>A capital do seu estado é: <h3>$estado</h3></p>";

    
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>