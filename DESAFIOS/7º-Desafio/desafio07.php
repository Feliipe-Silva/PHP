<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="desafio07.css">
</head>
<body>
    <?php 
        $sa = $_POST['sa'] ?? 0;
        $minimo = 1_412.00; // valor do salário mínimo de 2024;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="">Salário R$:</label>
                <input type="number" name="sa" id="sa">
            <p>Considerando o salário mínimo de <strong>R$: <?=number_format($minimo, 2, ".", ","); ?></strong></p>
                <input type="submit" value="Calcular">
            
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
            $resu = intdiv($sa, $minimo); //Resultado do valor inteiro, do (valor input dividido do salário mínimo);
            $resto = $sa % $minimo; //Aqui o resultado do resto da divisão;
            print "Quem recebi um salário de R\$" . number_format($sa, 2, ".", ","). ", ganha <strong>$resu salário mínimo +$resto reais.</strong>";
        ?>
    </section>
</body>
</html>