<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Porcentagem</title>
    <link rel="stylesheet" href="porcen.css">
</head>
<body>
    <?php 
        $precop = $_GET['precop'] ?? '0';
        $porcen = $_GET['porcen'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="">Preço do produto (R$)</label>
                <input type="number" name="precop" id="precop" step="0.01" value='<?=$precop; ?>'> 

            <label for="">Qual será o percentual de reajuste? (<span id="p"></span>%)</label>

                <input type="range" name="porcen" id="porcen" min="00" max="100" oninput="mudaValor()" value='<?=$porcen; ?>'>
                <input type="submit" value="Reajustar">
        </form>
    </main>

        

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $aumento = $precop * $porcen / 100;
            $novo = $precop + $aumento;

            print "<p>O produto que custava R$:". number_format($precop, 2, '.', ',').", com reajuste de $porcen% agora vai custar ". number_format($novo, 2, ".", ",")."</p>";
        ?>
    </section>

    <script>
        mudaValor()

        function mudaValor() {
            p.innerText= porcen.value;  // O Id p, está recebendo o id porcen, mais o valor do value! 
        }
    </script>
</body>
</html>