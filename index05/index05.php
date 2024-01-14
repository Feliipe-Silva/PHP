<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferência de Dados</title>
    <link rel="stylesheet" href="index05.css">
</head>
<body>
    <header>
    <h1>Transferência Recebido do 'Form Action Method'</h1>
    </header>
    <main>
        <?php 
            // var_dump($_REQUEST) // $_REQUEST - é uma maneira universal de transferência de dados.
            $nome = $_REQUEST ["nome"] ?? "Sem dígitos";
            $sobrenome = $_REQUEST ["sobrenome"] ?? "Sem dígitos";
            echo "<p> É um prazer te conhecer <strong>$nome $sobrenome</strong>!</p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior.</a>
    </main>
</body>
</html>