<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php
    function getRegiaoByEstado($estado) {
        $regioes = array(
          'Acre' => 'Norte',
          'Alagoas' => 'Nordeste',
          'Amapá' => 'Norte',
          'Amazonas' => 'Norte',
          'Bahia' => 'Nordeste',
          'Ceará' => 'Nordeste',
          'Distrito Federal' => 'Centro-Oeste',
          'Espírito Santo' => 'Sudeste',
          'Goiás' => 'Centro-Oeste',
          'Maranhão' => 'Nordeste',
          'Mato Grosso' => 'Centro-Oeste',
          'Mato Grosso Do Sul' => 'Centro-Oeste',
          'Minas Gerais' => 'Sudeste',
          'Pará' => 'Norte',
          'Paraíba' => 'Nordeste',
          'Paraná' => 'Sul',
          'Pernambuco' => 'Nordeste',
          'Piauí' => 'Nordeste',
          'Rio De Janeiro' => 'Sudeste',
          'Rio Grande Do Norte' => 'Nordeste',
          'Rio Grande Do Sul' => 'Sul',
          'Rondônia' => 'Norte',
          'Roraima' => 'Norte',
          'Santa Catarina' => 'Sul',
          'São Paulo' => 'Sudeste',
          'Sergipe' => 'Nordeste',
          'Tocantins' => 'Norte'
        );
        
        $estado = ucwords(strtolower($estado));
        
        if (isset($regioes[$estado])) {
          return $regioes[$estado];
        } else {
          return 'desconhecida';
        }
      }
      
    $estado=getRegiaoByEstado($_POST['estado']);
    echo "<p>Você mora na Região: <h3>$estado</h3></p>";

    
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>