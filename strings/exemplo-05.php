<?php
$nome = "Iago";
$novo = str_pad($nome, 10, "_", STR_PAD_LEFT);
print("Meu aluno $novo é gente boa");

echo "<Br>";

$number = "86";
$new = str_pad($number, 20, "_", STR_PAD_BOTH);
print("O numero $new me da sorte!")

//$input = "Alien";
//echo str_pad($input, 10);                      // produces "Alien     "
//echo "<br>";
//echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
//echo "<br>";
//echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
//echo "<br>";
//echo str_pad($input,  6, "___");               // produces "Alien_"
//echo "<br>";
//echo str_pad($input,  3, "*");                 // produces "Alien"
//echo "<br>";
?>