<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="desafio08.css">
</head>
<body>
    <?php 
        $num = $_GET['num'];
    ?>
    <main>
        <h1>Calcular Raiz Quadrada e R. Cubica</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="">Informe seu Número:</label>
                <input type="number" name="num" id="num">
                <input type="submit" value="GERAR RAÍZES">
        </form>
    </main>

    <section>
        <h2>Resultado:</h2>
        <?php 
            $rquadrada = sqrt($num); // sqrt é uma função que calcula raíz quadrada;
            $rcubica = $num ** (1/3); // fórmula aritmética que calcuça raíz cubica;
                print "Analisando o número <strong>$num</strong>, temos:";
                print "<ul><li>Raíz Quadrada = " .number_format($rquadrada, 2, ".", ",");
                print "<li>Raíz Cubica = " .number_format($rcubica, 2, ".", ",")."</ul>";  
        ?>
    </section>
</body>
</html>