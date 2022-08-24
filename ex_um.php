<?php

print nl2br("Funcionarios da Empresa: \n");
function empresa($funcionario, $salario){
	print nl2br("Nome: $funcionario. Salario: R$ $salario\n");
}
empresa('Rafael Souza', 2000);
empresa('Marcelo de Amaral', 1650);
empresa('Jennifer da Silva', 1870.50);
?>