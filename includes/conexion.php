<?php
// Conexión
$servidor = 'localhost:8889';
$usuario = 'root';
$password = 'root';
$basededatos = 'blog-php';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
	
}