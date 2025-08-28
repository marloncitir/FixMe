<?php
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fixme";

$conn = new mysqli($servername, $username, $password,$dbname);

if($conn->connect_error) {
die("Conexion fallida:" . $conn->connect_error);
}
?>

<<<<<<< Updated upstream
function conectar() {
    $host = 'localhost';
    $usuario = 'root';
    $clave = '';
    $base_datos = 'basedatos';

    $conexion = new mysqli($host, $usuario, $clave, $base_datos);

    if ($conexion->connect_error) {
        die('Error de conexión: ' . $conexion->connect_error);
    }

    return $conexion;
}

?>
=======

>>>>>>> Stashed changes
