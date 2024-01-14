<pre>
     <?php 
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        // contra barra (\), para aceitar mais de um par de aspas simples. 
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo
        (dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'
        &@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=
        json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = file_get_contents($url, true);
        $dados2 = json_decode($dados);
        
        var_dump($dados2); 
            
        $cotação = ["value"]["0"]["cotaçaoCompra"];

        echo "a cotação foi $cotação";

        # ERROS -> Failed to open stream: HTTP request failed! 
        # file_get_contents(): SSL: Foi forçado o cancelamento de uma conexão existente pelo host remoto in
    ?>
</pre>