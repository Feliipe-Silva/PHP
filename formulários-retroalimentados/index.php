<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php 
        // Capturando os dados(valores) do formulario retroalimentado
        $valor1 = $_POST['n1'] ?? 0;
        $valor2 = $_POST['n2'] ?? 0;
    ?>

    <main>
        <h1>Somador de Valores</h1>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <label for="">Digito 1:</label>
            <input type="number" name="n1" id="n1" value="0">
            <label for="">Digito 2:</label>
            <input type="number" name="n2" id="n2" value="0">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado:</h2>
        <?php $res = $valor1 + $valor2; 
            echo "<p>A soma entre o valor <strong>$valor1 e $valor2 = $res</strong></p>";
        ?>
        
    </section>
</body>
</html>