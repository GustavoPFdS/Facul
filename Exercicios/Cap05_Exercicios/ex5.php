<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1-GustavoPereira</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="ex5_resultado.php" method="POST">
            <?php
                $nums = array(1,2,3,4,5,6,7,8,9,10);
                foreach ($nums as $num) {
                echo "<label for='estado'>Nome:</label>
                <input type='text' id='nome$num' name='nome$num' required>
                <label for='numero'>Nota:</label>
                <input type='number' id='numero$num' name='numero$num' required min='0' max='100'><br>";
                }
            ?>
            <br><input type="submit" value="Enviar">
        </form>
    </div>
    <button onclick="window.location.href='index.html'">Voltar</button>
</body>
</html>