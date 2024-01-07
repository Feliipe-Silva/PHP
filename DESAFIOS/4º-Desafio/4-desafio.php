<pre>
        <?php 
            // contra barra (\), para aceitar mais de um par de aspas simples. 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo
            (dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'01-01-2024\'
            &@dataFinalCotacao=\'01-06-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=
            json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = jsom_decode(file_get_contents($url), true);
            //echo "$dados"; json_decode('{') ?: json_last_error();
            //var_dump($dados); 
        ?>
</pre>