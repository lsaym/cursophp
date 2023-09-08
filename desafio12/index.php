<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de tempo</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php 
$seg = $_GET['seg'] ?? "0";
?>

<body>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <h3>Calculadora de tempo</h3>
      <label for="seg">Digite o valor em segundos:</label>
      <input type="number" name="seg" id="seg" value="<?=$seg?>">
      <input type="submit" value="Analisar">
    </form>
  </main>
  <section>
    <h1>Totalizando:</h1>
    <?php 
    $semana = (int) ($seg/604800);
    $seg = $seg%604800;
    $dias = (int)($seg/86400);
    $seg = $seg%86400;
    $horas = (int)($seg/3600);
    $seg = $seg%3600;
    $minutos = (int)($seg/60);
    $seg = $seg%60;
    $segundos = $seg;
    

    echo "<p> analisando o valor que voce digitou " . number_format($seg, 2, ".", ".") . " segundos totalizam: </p>";
    ?>
    <ul>
      <li><?=$semana?> semanas</li>
      <li><?=$dias?> dias</li>
      <li><?=$horas?> horas</li>
      <li><?=$minutos?> minutos</li>
      <li><?=$seg?> segundos</li>
    </ul>
  </section>
</body>

</html>