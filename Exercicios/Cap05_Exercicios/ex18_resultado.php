<head><link rel="stylesheet" href="style.css"></head>
<div class="container">
<?php  
  function checar($f){
    $file = $f;
    $allowedFileTypes = array('image/gif', 'image/jpeg');
    if (!in_array($file['type'], $allowedFileTypes) || $file['size'] > 100000) {
      echo "Error: Imagem não enviada/válida<br>";
    } else {
      echo "a imagem ". $file['name']." foi recebida com sucesso<br>";
    }
  }
    if (isset($_FILES['arquivo1'])) {
      checar($_FILES['arquivo1']);
    }
    if (isset($_FILES['arquivo2'])) {
      checar($_FILES['arquivo2']);
    }
    if (isset($_FILES['arquivo3'])) {
      checar($_FILES['arquivo3']);
    }
    if (isset($_FILES['arquivo4'])) {
      checar($_FILES['arquivo4']);
    }
    if (isset($_FILES['arquivo5'])) {
      checar($_FILES['arquivo5']);
    }
?>
<button onclick="goBack()">Voltar</button>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>