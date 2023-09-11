<?php 
//Arrays
$carros = array("BMW", "Veloster", "Hilux");
print_r($carros); // o comando print_r mostra o conteúdo do array
echo "<br>";
echo $carros[0]; // mostra o conteúdo do array na posição 
echo "<br>";

//////////
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";       //// tambem pode ser adicionado dessa maneira após a criação do array
$motos[6] = "Suzuki";     ////  a posicao do array pode ser definida manualmente
print_r($motos);
echo "<br>";
echo $motos[6]; 
echo "<br>";

$nomes = [0=>"=>Rodrigo", 3=>"Felipe",5=> "Maria"]; /// tambem pode ser criado dessa maneira
 //// a posicao do array pode ser definida manualmente dessa maneira
print_r($nomes);
echo "<br>";
echo $nomes[5];
echo "<br>";
//////////////////////////// COUNT////////////////////////////
// count() - conta quantos elementos tem no array
$totalMotos = count($motos);
echo $totalMotos;
echo "<br>";
//////////////////////////// FOREACH////////////////////////////
// foreach() - percorre o array
foreach($carros as $valor){
    echo $valor."<br>";
}
//////////////////////////// ARRAYS ASSOCIATIVOS////////////////////////////
// Arrays Associativos
$pessoa = array("nome"=>"Rodrigo", "idade"=>23, "altura"=>1.75);
$pessoa["cidade"] = "Itajubá";
print_r($pessoa);
echo "<br>";
echo "<br>";
echo $pessoa["nome"];
echo "<br>";
echo "<br>";
foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<br>";
echo "<br>";
//////////////////////////// ARRAYS MULTIDIMENSIONAIS////////////////////////////
// Arrays Multidimensionais
$times = array(
    "cariocas"=>array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
    "paulistas"=>array("terceiro"=> "santos","campeao"=> "sao paulo","vice"=> "palmeiras"),
    "baianos"=>array("campeao"=>"bahia","vice"=>"vitoria","terceiro"=>"itabuna")
);
echo "<br>";
foreach($times["cariocas"] as $indice => $valor){
  echo $indice.":".$valor."<br>";
}
echo "<br>";
foreach($times["paulistas"] as $posicao =>$valor){
  echo $posicao.": ".$valor. "<br>";
}
echo "<br>";
foreach($times["baianos"]as $posicao => $equipe){
  echo $posicao.": ".$equipe. "<br>";}
  echo "<br>";
  $torcida = array_merge($times,$pessoa);
  print_r($torcida);
  echo "<br>";
  echo "<br>";
  $frutas = ["manga","morango"];
  echo "<br>";
  echo "<br>";
  array_push($frutas,"acerola");
  var_dump($frutas);
  echo "<hr>";
  echo "<br>";
  for ($i=0;$i<=10;$i++):
  echo "o contador è :$i <br>";
endfor;

    ?>