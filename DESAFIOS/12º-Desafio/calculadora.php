<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12º Desafio</title>
    <link rel="stylesheet" href="calculadora.css">
</head>
<body>
    <?php 
        $total = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>
            Calculadora de Tempo
        </h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="">Qual o total de segundos</label>
                <input type="number" name="seg" id="seg" value="<?=$total; ?>"> 
                <input type="submit" value="Calcular">
        </form>
    </main>
        <?php 
         $sobra = $total;
         // Total de semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;
            // Total de dias
                $dia = (int)($sobra / 86_400);
                $sobra = $sobra % 86_400;
                // Total de horas 
                    $hora = (int)($sobra / 3_600);
                    $sobra = $sobra % 3_600;
                    // Total de minutos
                        $min = (int)($sobra / 60);
                        $sobra = $sobra % 60;
                        // Total de segundos
                            $segundo = $sobra;
        ?>
    <section>
        <h2>
            Totalizando Tudo
        </h2>
        <ul>
            <li>[<?=$semana; ?>] Semanas</li>
            <li>[<?=$dia; ?>] Dias</li>
            <li>[<?=$hora; ?>] Horas</li>
            <li>[<?=$min; ?>] Minutos</li>
            <li>[<?=$segundo; ?>] Segundos</li>
        </ul>
    </section>
</body>
</html>