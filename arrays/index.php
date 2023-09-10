<?php 
//Arrays
$carros = array("BMW", "Veloster", "Hilux");
print_r($carros); // o comando print_r mostra o conteúdo do array
echo "<br>";
echo $carros[0]; // mostra o conteúdo do array na posição 0
echo "<br>";

//////////
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";       //// tambem pode ser adicionado dessa maneira após a criação do array
$motos[6] = "Suzuki";     ////  a posicao do array pode ser definida manualmente
print_r($motos);
echo "<br>";
echo $motos[6]; 

$nomes = [0=>"=>Rodrigo", 3=>"Felipe",5=> "Maria"]; /// tambem pode ser criado dessa maneira
 //// a posicao do array pode ser definida manualmente dessa maneira
print_r($nomes);
echo "<br>";
echo $nomes[5];

?>