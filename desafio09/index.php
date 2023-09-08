<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medias aritimeticas simples e ponderadas </title>
  <link rel="stylesheet" href="style.css">
</head>
<?php 
$m1 = $_GET['m1'] ?? "1";
$p1 = $_GET['p1'] ?? "1";
$m2 = $_GET['m2'] ?? "1";
$p2 = $_GET['p2'] ?? "1";
?>

<body>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <p><strong><small>Insira os valores das medias e dos pesos a serem analisados!</small></strong></p>
      <label for="m1">media 1:</label>
      <input type="number" name="m1" id="m1" value="<?=$m1?>" step="any">
      <label for="p1">peso 1:</label>
      <input type="number" name="p1" id="p1" value="<?=$p1?>" step="any">
      <label for="m2">media 2:</label>
      <input type="number" name="m2" id="m2" value="<?=$m2?>" step="any">
      <label for="p2">peso 2:</label>
      <input type="number" name="p2" id="p2" value="<?=$p2?>" step="any">
      <input type="submit" value="analisar">
    </form>
  </main>
  <section>
    <h1>Resultado final</h1>
    <?php 
    $simples= ($m1+$m2)/2;
    $ponderada = ($m1*$p1+$m2*$p2)/($p1+$p2);
    ?>
    <ul>
      <li><?="A media simples tem o valor de: ". number_format($simples,3, ",")?></li>
      <li><?="A media ponderada tem o valor de: " . number_format($ponderada, 3, ",")?></li>
    </ul>
  </section>
</body>

</html>