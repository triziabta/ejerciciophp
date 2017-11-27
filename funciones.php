<?php
// declaracion/definicion de funcion
function add10($numero) {
echo "empieza la funcion ";
  return $numero + 10;
  // todo lo que viene detras de return no va a aparecer
  // echo "termina la funcion";
}

$resultado = add10(7);
// lo mismo se podrá hacer para calcular el IV
// funcion addIVA($sumero){
//   return $numero * 1.21;
//
// }
// $resultado= addIVA(8);
// echo $resultado;

// esto es procedimiento
function  saluda(){
  echo "Hola a todos <br>";
}

function addIVAMejorado($valor, $factor=1.21){

  return $numero * $factor;
}
// aunque no tenga argumentos se ponen los ()
saluda();
echo $resultado;
$resultado =add10(200);
echo $resultado;
echo "<br>"
echo addIVAMejorado(10);
echo "<br>";
echo addIVAMejorado(10, 1.0);

?>
