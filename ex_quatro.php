<?php

$color = array("blue", "red", "green", "yellow", "white");

print("Lista Ordenada: ");
foreach ($color as $valor) {
	print "$valor,\t";
}

echo nl2br("\nLista Desordenada: ");
sort($color);
foreach ($color as $key => $valor) {
	print "$valor,\t";
}
?>