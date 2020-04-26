<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "dynatest";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

?>