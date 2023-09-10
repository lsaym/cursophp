<?php 
function soma(){
  $a= 10;
  $b= 20; 
  $c= 30;
  return $a + $b + $c;
}
echo soma();
////////////////////////////////////////////////
echo "<br>";
$e= 20;
$f = 30;
$h = 40;  
function soma2(){
  global $e, $f, $h; /// tem que estar especificada a variavel global pois foi declarada fora da função no escopo global.
  return $e + $f + $h;
}
echo soma2();
?>