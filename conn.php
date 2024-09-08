<?php
$bd_host = "localhost";
$user = "root";
$pass = "ely_neder";
$bd_name = "aula";


$mysqli = mysqli_connect($bd_host,$user,$pass,$bd_name); 

if(!$mysqli){
    die("Ops, não consegui conectar! " . mysqli_connect_error());
} else {
    echo "Conectado com sucesso.";
}

?>