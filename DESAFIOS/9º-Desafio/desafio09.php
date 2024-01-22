<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title> 
    <link rel="stylesheet" href="desafio09.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 0;
    ?>
    <main>
        <h1>Média Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="">1º valor:</label>
                <input type="number" name="v1" id="v1">
            <label for="">1º peso:</label>
                <input type="number" name="p1" id="p1">
            <label for="">2º valor</label>
                <input type="number" name="v2" id="v2">
            <label for="">2º peso</label>
                <input type="number" name="p2" id="p2">
                <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Resulta das Médias</h2>
        <?php 
            $r1 = $v1 * $p1;
            $r2 = $v2 * $p2;           
            $rp = $p1 + $p2;
            $rponderada = ($r1 + $r2) / $rp;
            $rmedia = ($v1 + $v2) / 2;

            echo "Analisando os valores <strong>$v1 e $v2, com pesos $p1 e $p2.</strong>";
            print "<ul><li> Resultado da Média Aritmética é: ". number_format($rmedia, 2, ".", ",");
            print "<li> Resultado da Média Ponderada é: " . number_format($rponderada, 2, ".", ",") ."</ul>";
        ?>
    </section>
</body>
</html>