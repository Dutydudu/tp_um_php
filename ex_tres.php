<?php

$func = array("Ronald"=>1010, "Bernard"=>1400, "Jair"=>650, "Maria"=>2000, 
"Ferdinand"=>2300, "Richard"=>3000, "Wanderson"=>540, "Pep"=>800, "Leticia"=>5000, "Max"=>700);
foreach ($func as $key => $value) {
	if ($value > 1000) {
		echo "Funcionario: ".$key.". Salario: ".$value."<br/>";
	}
}
?>