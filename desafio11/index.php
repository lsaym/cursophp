<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medias aritimeticas simples e ponderadas </title>
  <link rel="stylesheet" href="style.css">
</head>
<?php 
$valor = $_GET['valor'] ?? "0";
$reajuste = $_GET['reajuste'] ?? "0";
?>

<body>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <h3>Calculo de percentual de aumento</h3>
      <label for="valor">Valor:</label>
      <input type="number" name="valor" id="valor" step="any" value="<?=$valor?>">
      <label for="reajuste">Qual sera o percentual de ajuste: <strong><span id="p">?</span>%</strong></label>
      <input type="range" name="reajuste" id="reajuste" min="0" max="100" value="<?=$perc?>" step="1"
        oninput="mudaValor()">
      <input type="submit" value="Calcular aumento">
    </form>
  </main>
  <section>
    <h1>Valores atualizados:</h1>
    <?php 
    echo "O valor R$ $valor <b>sofrerá um aumento de $reajuste%</b> e passará a valer R$ <b>".number_format($valor + ($valor * $reajuste / 100), 2, ',', '.')."</b>";
    ?>
  </section>
</body>
<script>
function mudaValor() {
  p.innerHTML = reajuste.value;
}
</script>

</html>