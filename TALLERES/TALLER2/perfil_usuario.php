<?php
$nombre_completo = "Elbert Joel Tuñon Guadalupe";
$edad = "25";
$correo = "jtg145@hotmail.com";
$telefono = "62703637";

define("OCUPACION", "Back Office");

echo "Hola, mi nombre es $nombre_completo y tengo $edad años, actualmente soy agente de " . OCUPACION ." mi correo es $correo y mi telefono $telefono para que me puedan contactar<br>";
echo "<br>Información de debugging:<br>";
var_dump($nombre_completo);
echo "<br>";

var_dump($edad);
echo "<br>";

var_dump($correo);
echo "<br>";

var_dump($telefono);
echo "<br>";

var_dump(OCUPACION);
echo "<br>";
?>