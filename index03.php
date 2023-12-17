<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal          // 0b = binario          // 0 = octal

        //$num = 300;
        //$num = 010;  // 0 é octal e 1 e 0 é igual a 8 
        //echo "O valor da variavel é ". $num;


        // $v = 48.9;
        // $n = "Felipe";
        // var_dump($v).'<br>';
        // var_dump($n);       vai apresentar o nome e a quantidade de letras.

        // $num = (int) 3e2; // é a mesma coisa que 3 X 10(2) coerção
        // echo "Qual o valor de num sendo(3e2), $num";
        // var_dump($num);  // com (int) na frente forçando. Exemplo abaixo

        // $n = (float) "950"; // forçando para float.
        // echo "Forçando o tipo primitivo do PHP - $n<br>";
        // var_dump($n)

        // $animal = false;  // tipo 'false' não apresentado em tela fica(vazio).
        // var_dump($animal);    // o tipo 'true' é considerado (1).
        // echo "O valor da variavel animal é $animal";

        // $array = [6, true, 20.22, "Felipe"];
        // var_dump($array);

        class Pessoa {
            private string $nome;
        }

        $c = new Pessoa;
        var_dump($c);
    ?>
</body>
</html>