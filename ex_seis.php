<?php

$color = array("blue", "red", "green", "yellow", "white");

echo nl2br("\nAmostra: ");
print_r(array_slice($color, 3,-1, true));

?>