<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'crudphp';
$databaseUsername = 'root';
$databasePassword = 'NOKIAlumia';
$databasePort = 4499;


$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $databasePort);

?>