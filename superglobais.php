<pre>
    <?php 
        //$_GET - Gera um array com todas as variaveis passandon por parâmetro através de uma URL;
            echo "<ul><li>GET - Gera um array com todas as variaveis passando por parâmetro através de uma URL;</p>";
        //$_POST - Pega dados de formularios utilizando o metado POST (method='POST');
            echo "<li>POST - Pega dados de formularios utilizando o metado POST (method='POST');</p>";
        //$_REQUEST - Tem a função do GET e o POST, porém pesa um mais em consumo de dados;
            echo "<li>REQUEST - Tem a função do GET e o POST, porém pesa mais em consumo de dados;</p>";
        //$_COOKIE - Variavel que fica guardado dentro do navegador por tempo específico;
            echo "<li>COOKIE - Variável que fica guardado dentro do navegador por tempo específico;</p>";
        //$_FILES - Consegui pega arquivos e dados de upload;
            echo "<li>FILES - Consegui pega arquivos e dados de upload;</p>";
        //$_SESSION - Permite utilizar variaveis de diversas navegações de paginas e seja usada;
            echo "<li>SESSION - Permite utilizar variaveis de diversas navegações de páginas e reeutilizalas;</p>";
        //$_ENV - É um array associativo onde cada uma das suas chaves é uma variável de ambiente apontando para o seu valor;
            echo "<li>ENV - É um array associativo onde cada uma das suas chaves é uma variável de ambiente apontando para o seu valor;</p>";
        //$_SERVER - é possível recuperar uma gama de informações bastantes úteis para o  aprimoramento do seu sistema;
            echo "<li>SERVER - é possível recuperar uma gama de informações bastantes úteis para o aprimoramento do seu sistema;</p>";
        //$GLOBALS - Utiliza tudo das demais superglobais;
            echo "<li>GLOBALS - Utiliza tudo das demais superglobais acima;</ul>";
    ?>
</pre>