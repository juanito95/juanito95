
<?php
echo "Tablas de multiplicar";
echo "<table border=2>";
echo "<tr>";

for ($i=1; $i < 12; $i++) { 
	echo "<td>";
	for ($j=1; $j < 12 ; $j++) {


	$resultado = $i*$j;

	echo $i. "*".$j."=".$resultado;
 	echo "<br>";
	}
	
}
echo "</tr>";
echo "</table>";


?>
