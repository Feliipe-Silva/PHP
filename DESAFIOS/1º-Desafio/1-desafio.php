<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1-desafio.css">
</head>
<body>
       <section>
        <h1>Resultado Final</h1>
            <main>
                <?php 
                    $n = $_GET["num"] ?? 0;
            
                    echo "O número escolhido  foi: <strong>$n</strong>";
                    $n = $n -1;
                    echo "<br>O seu antecessor é: <strong>$n</strong>";
                    $n = $n +2;
                    echo "<br>E seu sucessor é: <strong>$n</strong>.";
                ?>
                <a href="javascript:history.go(-1)"><input type="button" value="<-- Volta"></a>
            </main>
       </section>
</body>
</html>