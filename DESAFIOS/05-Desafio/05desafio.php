<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 Desafio</title>
    <link rel="stylesheet" href="05desafio.css">
</head>
<body>
    <main>
        <h1>Resultado:</h1>
        <?php 
            $num = $_REQUEST['num'] ?? 0;
            echo "<p>Através dos números digitados temos o resultado: <strong>".number_format($num, 3, ",", ".")."</strong></p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li>A parte inteira do valor: <strong>".number_format($int, 0, ",",".")."</strong></li>";
            echo "<li>A parte fracionaria do valor é: <strong>".number_format($fra, 3, ",",".")."</strong></li></ul>"
    
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>