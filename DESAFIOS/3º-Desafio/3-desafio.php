<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="3-desafio.css">
</head>
<body>
    <main>
        <h1>Valor Convertido:</h1>
        <?php 
            $real = $_GET["valor"] ?? 0;
            $dolar = 4.83;
            $conv = $_GET["converter"];
            $conv = $real / $dolar;

           /*  $padrão = numfmt_create("pt-BR", NumberFortatter::CURRENCY); #dessa maneira usando a biblioteca internacional.
            echo "Seus". numfmt_format_currency($padrão, $real, "BRL") .
            "é equivalente a". numfmt_format_currency($padrão, $conv, "USD"); */

             echo "Seus R$:<strong>". number_format($real, 2, ",", "."). "</strong> é equivalente a U$:<strong>". number_format($conv, 2, ",", ".");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>