<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Números pares entre</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>

        
        <button type="submit" name="fibonacci">gerar fibonacci</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['fibonacci'])) {
            $numero1 = (int)$_POST['numero1'];


            if ($numero1 > 50) {
                echo "<p>Por favor, escolha no máximo 50 termos para manter a clareza.</p>";
            }   
            else if($numero1 <= 0){
                echo "<p>Deu ruim manito</p>";
            }
            else{
                $sequencia = [];
                $num1 = 0;
                $num2 = 1;


                for($i = 0; $i < $num1; $i++) {
                    $sequencia = $num1;
                    $nesxt = $num1 + $num2;
                    $num1 = $num2;
                    $num2 = $num1;
                }

                echo "<div class='resultado'>";
                echo "<strong>Sequência de Fibonacci ({$numero1} </strong><br>";
                echo "<p>" . implode(" → ", $sequencia) . "</p>";
                echo "</div>";
            }


    
        }
    }
    ?>
</body>
</html>