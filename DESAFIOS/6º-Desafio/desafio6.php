<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="desafio06.css">
</head>

<body>
    <?php 
        $dvd = $_POST['dvd'] ?? 0;
        $dvs = $_POST['dvs'] ?? 1;
    ?>
    <main>
        <h1>Tela de Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> <!--dentro do php echo ou sinal de = PARA EXIBIR O MESMO FORMULÁRIO; -->
            <label for="">Dividendo:</label>
                <input type="number" name="dvd" id="dvd" nin="0" value="<?=$dvd?>">
            <label for="">Divisor:</label>
                <input type="number" name="dvs" id="dvs" nim="1" value="<?=$dvs?>">
                <input type="submit" value="Gerar">
        </form>
    </main> 
    <section>
        <h2>Resultado da Divisão:</h2>
        <?php
            print "DIVIDENDO $dvd";
            print "<p>DIVISOR $dvs</p>";
            $quociente = $dvd / $dvs;
            $resto = $dvd % $dvs;
            print "<strong>Resultado do quociente: $quociente <p>Resto da divisão: $resto</strong></p>";
        ?>
        <hr>
        <table class="divisao">
            <tr>
                <td><?=$dvd; ?></td>
                <td><?=$dvs; ?></td>
            </tr>
            <tr>
                <td><?=$resto; ?></td>
                <td><?=$quociente; ?></td>
            </tr>
        </table>
    </section>
</body>
</html>
