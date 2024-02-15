<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13º Desafio</title>
    <link rel="stylesheet" href="caixaeletronico.css">

        <style>
            img.nota {
                height: 50px;
                margin: 2px;
            }
        </style>

</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? null;
    ?>
    <main>
        <h1>
            CAIXA ELETRÔNICO
        </h1>
        <form action="" method="get">
            <label for="">Qual o valor deseja sacar? R$:</label>
                <input type="number" name="valor" id="valor" step='5' required>
                <p>
                    <small>Disponíveis nota de R$:100 | R$:50 | R$:10 | R$:5</small>
                </p>
                <input type="submit" value="Sacar">
        </form>
    </main>
            <?php 
                $resto = $valor;
                // Notas de 100
                $valor100 = intdiv($resto, 100); 
                $resto= $resto % 100;    // aqui meu resto vai ganhar um novo valor, que é o resto da divisão;

                    // Notas de 50
                    $valor50 = (int)($resto / 50);
                    $resto = $resto % 50;

                        // Notas de 10
                        $valor10 = (int)($resto / 10);
                        $resto = $resto % 10;

                            // Notas de 5
                            $valor5 = (int)($resto / 5);
                            $resto = $resto % 5;
            ?>
                
    <section>
        <h2>
            SAQUE DE R$:<?=$valor; ?> REALIZADO
        </h2>
                    <p>O caixa vai liberar as seguintes notas:</p>
            <ul>
                <li><img src="imagens/100-reais.jpg" alt="100 reais" class='nota'> Quantidade: <?=$valor100; ?></li>
                <li><img src="imagens/50-reais.jpg" alt="50 reais" class='nota'> Quantidade: <?=$valor50; ?></li>
                <li><img src="imagens/10-reais.jpg" alt="10 reais" class='nota'> Quantidade: <?=$valor10; ?></li>
                <li><img src="imagens/5-reais.jpg" alt="5 reais" class='nota'> Quantidade: <?=$valor5; ?></li>
            </ul>
    </section>
</body>
</html>