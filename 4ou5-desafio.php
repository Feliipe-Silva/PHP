<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Números Fracionários</h1>

    <?php 
    $num = 345.345;
    echo "$num";
    echo "<br> * <strong>$num</strong> <br>";
    echo number_format($num, 2, "", "");
    //echo floor(27.588877333333);
    echo int($num);
    //echo floor($num);
    ?>
</body>
</html>