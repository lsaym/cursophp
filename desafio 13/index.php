<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caixa eletronico</title>
  <link rel="stylesheet" href="style.css">
  <style>
  img.nota {
    height: 50px;
  }
  </style>
</head>
<?php 
$saque = $_GET['saque'] ?? "0";
?>

<body>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <h3>Caixa eletrönico</h3>
      <label for="saque">Digite o valor ea ser sacado:</label>
      <input type="number" name="saque" id="saque" value="<?=$saque?>" step="5" required>
      <input type="submit" value="Analisar">
      <p><strong><small>Este caixa disponibiliza apenas notas de 100* 50* 10* e 5*</small></strong></p>
    </form>
  </main>
  <section>
    <h1>Saque:</h1>
    <?php 
    $nota100 = floor ($saque/100);
    $saque = $saque%100;
    $nota50 = floor($saque/50);
    $saque = $saque%50;
    $nota10 = floor($saque  /10);
    $saque = $saque%10;
    $nota5 = floor($saque /5);
    $saque = $saque%5;
    

    echo "Retirando... ";
    ?>
    <ul>
      <li><img src="img/100-reais.jpg" class="nota"> x<?=$nota100?></li>
      <li><img src="img/50-reais.jpg" class="nota">x<?=$nota50?></li>
      <li><img src="img/10-reais.jpg" class="nota">x<?=$nota10?></li>
      <li><img src="img/5-reais.jpg" class="nota">x<?=$nota5?></li>
    </ul>
  </section>
</body>

</html>