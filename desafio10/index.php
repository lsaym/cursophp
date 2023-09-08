<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medias aritimeticas simples e ponderadas </title>
  <link rel="stylesheet" href="style.css">
</head>
<?php 
$ano1 = $_GET['ano1'] ?? "1";
$ano2 = $_GET['ano2'] ?? "1";
$anotual = date('Y');
?>

<body>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <p><strong><small>Analisador de idade</small></strong></p>
      <label for="ano1">ano em que nasceu:</label>
      <!-- <input type="number" name="ano1" id="ano1" min="0" max="2023" value="<?=$ano1?>"> -->
      <input type="date" name="ano1" id="ano1" value="<?=$ano1?>">
      <label for=" ano2">ano em que deseja saber a idade</label>
      <!-- <input type="number" name="ano2" id="ano2" value="<?=$ano2?>"> -->
      <input type="date" name="ano2" id="ano2" min="$ano1" value="<?=$ano2?>">
      <input type="submit" value="Analisar ">
    </form>
  </main>
  <section>
    <h1>Idade:</h1>
    <?php 
    $nasc = new DateTime($ano1);
    $atual = new DateTime($ano2);
    $idade = $atual->diff($nasc);
    if($atual < $nasc){
      echo "O ano de nascimento nao pode ser maior que o ano que deseja saber a idade";}
      else{
        echo "A idade é: " . $idade->format('%Y')  ;
      };  
    // $idade= $ano2 - $ano1;
    // if($idade<0){
    //   echo "O ano de nascimento nao pode ser maior que o ano em que deseja saber a idade";
    // }else{
    //   echo "A idade é: " . $idade;
    // }
    ?>
  </section>
</body>

</html>