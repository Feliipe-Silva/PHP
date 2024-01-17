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
        //$minimo = 1380;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="">Salário R$:</label>
                <input type="number" name="sa" id="sa">
            <p>Considerando o salário mínimo de <strong>R$: 1.380,00</strong></p>
                <input type="submit" value="Calcular">
            
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
            $minimo = 1380;
            $resto = $sa % $minimo;
            print "Quem recebi um salário de $sa ganha + $resto";
        ?>
    </section>
</body>
</html>