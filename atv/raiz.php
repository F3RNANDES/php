<?php

function raizquadrada($numero){
   $raiz = $numero ** 0.5;
   if($raiz < 0 )
        return null;
   else {
       return $raiz;
   } 
}
print intval(raizquadrada(81));
echo "<Br>";
var_dump(raizquadrada(225))

?>