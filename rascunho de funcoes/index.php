<?php 
echo round(3.5);
echo "<hr>";
function calcularMedia ($nome,$n1,$n2,$n3,$n4){
  $media = ($n1+$n2+$n3+$n4)/4;
  if($media>=7):
    echo strtoupper("$nome foi aprovado com a media: $media!");
  else:
    echo "$nome foi reprovado com a media: $media!";
  endif;
}
calcularMedia("lucas",8,8,8,8);
echo "<hr>";
///////////////////////////////////////////////////////////
function parOuImpar ($valor){
 $res=  $valor%2;
if($res==0):
echo "o numero $valor e par!";
else:
echo "o numero $valor é impar!";
endif;
}
parOuImpar(255)
?>