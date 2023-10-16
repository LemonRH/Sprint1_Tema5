<?php
$nombre = $_GET["nombre"];
echo "Nombre: " . $nombre . "<br>";

$contrasena = $_GET["password"];
echo "Contraseña: " . $contrasena . "<br>";

$educacion = $_GET["educacion"];
echo "Educación: " . $educacion . "<br>";

$nacionalidad = $_GET["nacionalidad"];
echo "Nacionalidad: " . $nacionalidad . "<br>";

if (isset($_GET["idiomas"])) {
    $idiomas = $_GET["idiomas"];
    echo "Idiomas:";
    foreach ($idiomas as $idioma) {
        echo " " . $idioma;
    }
    echo "<br>";
}

$email = $_GET["email"];
echo "Email: " . $email . "<br>";

$sitioweb = $_GET["sitioweb"];
echo "Sitio Web: " . $sitioweb . "<br>";



?>