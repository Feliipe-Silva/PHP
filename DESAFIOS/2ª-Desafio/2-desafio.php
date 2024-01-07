<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="2-desafio.css">
</head>
<body>
<section>
        <h1>Gerador de Números Aleatórios</h1>
        <p>Gerando números aleatórios de 1 a 100:</p>
            
        <?php 
            $num = $_GET["num"];
            $num = mt_rand(1, 100);
            echo "O número gerado foi: <strong>>$num</strong>";
        ?>

        <form action="2-desafio.php" method="get">
            <input type="submit" value="Gerar" name="num" id="num">
        </form>
        
    </section>

    
</body>
</html>