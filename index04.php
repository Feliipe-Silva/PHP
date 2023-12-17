<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings com PHP</title>
    <style>
        h1{
            background-color: blue;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <h1>ENDENDO MELHOR SOBRE STRINGS</h1>
    <hr>
    <?php 
    $nome = "Felipe";
    $sobrenome = 'Silva';

    echo "Qual é o nome: $nome. E o sobrenome: $sobrenome";  // String com aspas "Dubla" com interpretação.
    echo '<br> Qual é o nome: $nome. E o sobrenome: $sobrenome';  // String com aspas 'Simple' sem interpretação.

    const ESTADO = "CEARÁ";  // CONSTANTES não carregam '$' cifrão

    echo "<br> Moro no ESTADO.";
    echo '<br> Moro no ESTADO.';
    echo '<br> Moro no '. ESTADO; // desta maneira vai funcionar no caso de CONSTANTES
    echo "<br> Estamos no ano de: ". date('Y');

    $n1 = "Pedro";
    $n2 = "Silva";
    echo "<br> $n1  \"Felipe Dantas\" $n2";  // contra barra '\' para apresentar aspas sem erro.
    
    ?>
</body>
</html>