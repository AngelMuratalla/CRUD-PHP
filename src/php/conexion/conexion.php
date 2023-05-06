<?php 
// Conexión a la base de datos
$host_db = "localhost";
$user_db = "root";
$psw_db = "";
$dbname = "tienda_online";

// Crear conexión
$conexion = new mysqli($host_db, $user_db, $psw_db, $dbname);

// Comprobar la conexión
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}
echo "Conexión exitosa";

?>