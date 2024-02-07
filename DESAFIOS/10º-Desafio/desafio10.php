<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title> 
    <link rel="stylesheet" href="desafio10.css">
</head>
<body>
    <?php
        $nasceu = $_REQUEST['anoN'] ?? 0;
        $anoT = $_REQUEST['anoT'] ?? 0;
        $data = date('Y');
    ?>
    <main>
        <h1>Calculadora de Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="">Em que ano nasceu?</label>
                <input type="number" name="anoN" id="anoN" max="<?=$anoT?>">
            <label for="">Que saber sua idade em que ano? (atualmente estamos em 2024)</label>
                <input type="number" name="anoT" id="anoT" value="2024">
                <input type="submit" value="Qual será a sua idade?">
        </form>
    </main>
    <section>
        <h2>Sua Idade:</h2>
        <?php
            $res = $anoT - $nasceu;       
                    print "Atualmente estamos em $data.";
                    print "<p>Você tem idade de <strong>$res anos.</strong></p>";

            
              /*  if ($date == 2024) {
                    print "Atualmente estamos em $data.";
                    print "<p>Você tem idade de <strong>$res anos.</strong></p>";

                } else if ($date > 2024) {
                    print "Com base no ano de $anoT.";
                    print "<p>Você tem idade de <strong>$res anos.</strong></p>";
                };    */
                
        ?>
    </section>
</body>
</html>