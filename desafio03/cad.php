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
    
# Converte o preço de um produto em Dólar para Real

$valor = $_REQUEST["real"] ?? "0";
const COTACAO = "4.97";
$dolar = $valor/COTACAO;
$valor_final = $valor*COTACAO;
$padrao = numfmt_create( "pt_BR", NumberFormatter::CURRENCY); // Cria um formatador de moeda para o Brasil


# Exibe resultados


echo "Cotação dólar:" . COTACAO . "<br>";
echo "Valor em Real: " . numfmt_format_currency($padrao, $valor,"BRL") . "<br>"; // Formata o valor em moeda do brasil
echo "<strong>Valor em Dolar: </strong>" . numfmt_format_currency($padrao, $dolar,"USD"); // Formata o valor em moeda dos eua
?>
    <button class="voltar"> <a href="javascript:history.go(-1)">Refazer Conversão</a></button>
</body>
</main>

</html>