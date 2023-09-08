<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Resultado final</h1>
  </header>
  <main>
    <?php

    # API BANCO DO BRASIL
      $inicio = date("m-d-Y", strtotime("-7 days")); // pega a data do sistema e subtrai 7 dias
      $fim = date("m-d-Y"); // pega a data do sistema no dia atual
      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
      $dados = json_decode(file_get_contents($url), true); // pega os dados da api e converte para json
      $cotacao = $dados["value"][0]["cotacaoCompra"]; // pega o valor da cotação do dolar no json
    # FIM API BANCO DO BRASIL




      # Recebe valor do formulário
      $valor = $_REQUEST["real"] ?? "0";
      $dolar = $valor/$cotacao;
      $valor_final = $valor*$cotacao;
      $padrao = numfmt_create( "pt_BR", NumberFormatter::CURRENCY); // Cria um formatador de moeda para o Brasil
    

      # Exibe resultados
      echo "Cotação dólar:" . $cotacao . "<br>";
      echo "Valor em Real: " . numfmt_format_currency($padrao, $valor,"BRL") . "<br>"; // Formata o valor em moeda do brasil
      echo "<strong>Valor em Dolar: </strong>" . numfmt_format_currency($padrao, $dolar,"USD"); // Formata o valor em moeda dos eua
?>
    <button class="voltar"> <a href="javascript:history.go(-1)">Refazer Conversão</a></button>
</body>
</main>
<!-- Cria um formatador de moeda para o Brasil

       $padrao = numfmt_create( "pt_BR", NumberFormatter::CURRENCY); 
       numfmt_format_currency($padrao, "variavel com o valor que voce quer" ,"BRL")  -->

</html>