<?php

if($_POST){
    session_start();
    $servername = "localhost";
$database = "pibd";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$usu1=$_POST["usu"];
$contra=$_POST["pass"];
$conex -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query=$conex->prepare("SELECT* FROM usuarios WHERE nomUsuario =:usu1 AND clave = :contra");
$query->bindParam(":usu1", $usu1);
$query->bindParam(":contra", $contra);
$query->execute();
$usuario=$query->fetch(PDO:: FETCH_ASSOC);
if($usuario){

$_SESSION["usuario"] = $usuario["nomUsuario"];
header("location:Indexx.php");

}else{
    echo "Error";
}

}



?>