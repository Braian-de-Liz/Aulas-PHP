<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Números pares entre</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">diga uma palavra esquisitinha</label>
        <input type="text" id="palavra_analisada" name="palavra_analisada" required>
        <strong></strong>


        <br>

        
        <button type="submit" name="palavra_analisaada">Verificar palindrosagem</button>
    </form>
    <?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['palavra_analisada'])) {
            
            $palavrinhazada = $_POST['palavra_analisada'];
            $adazahnirvalap = strrev($palavrinhazada);


          if($palavrinhazada != $adazahnirvalap){
            echo "<p>Sua <strong>$palavrinhazada</strong> palavra não é um palindromool <strong>$adazahnirvalap</strong></p>";
        }
        else{
            echo "<p><strong>$palavrinhazada</strong> é um palindromo e seu palindromo é <strong>$adazahnirvalap</strong></p>";
          }


    
        }
    }
    ?>
</body>
</html>