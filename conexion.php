<?php
// function es un metodo vale  connectdb es el nombres de ese metodo o funcion en este caso esta haciendo una conexxion algo que ustedes no tenian
function connectdb(){
    $dbhost = "localhost";
    $dbuser = "baleyorg_usuario";
    $dbpass = "Usuari0s";
    $dbname = "baleyorg_inventario";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if(!$conn){
        die("no hay conexion".mysqli_connect_error());
        
    }
    // se aplica un return para devolver la conexion en la variable $conn
    return $conn;
}
?>