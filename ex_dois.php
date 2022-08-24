<?php

print nl2br("\nFuncionarios da Empresa:\n");

$nome = array("Fernando", "Cassio", "Marcela", "Larissa");
$salario = array(2200, 1550, 1875, 2350.50);

foreach (array_combine($nome, $salario) as $n => $s){
	print nl2br("$n: R$ $s\n");
}
?>