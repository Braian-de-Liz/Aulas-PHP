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

            function partidor($texto)
            {
                $vogais = ['a', 'e', 'i', 'o', 'u',  'A', 'E', 'I', 'O', 'U'];
                $contador = 0;
                $letras = str_split($texto);

                foreach($letras as $letras){
                    
                }
                $texto;
            }

            $palavra = $_POST("palavra_analisaada");
        }
    }
    ?>
</body>

</html>