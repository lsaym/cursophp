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
    <h1>Gerando um numero aleatorio</h1>
  </header>
  <main>
    <main>
      <?php
          $min = 0;
          $max = 100;
          $num = mt_rand($min, $max);
          // rand() funcao de 1951 baseada no algoritimo de linear congruential generator
          // mt_rand() funcao de 1996 baseada no algoritimo de mersenne twister 4x mais rapida que a rand()
          echo "<p> gerando um numero aleatorio entre $min e $max...</p> \n";
          echo "<p> O numero gerado foi : <strong> $num </strong></p>";
      ?>
      <button onclick="javascripit:document.location.reload()"> Gerar um novo numero</button>
    </main>
</body>
</main>

</html>