<?php
try{
    $servidor= 'localhost';
    $usuario = 'root';
    $password  = 'root';
    $bd = 'portafolio1';
    
    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd); /*la que conecta la base de datos*/
    echo('coneccion a la base de datos exitosa');
} catch (\Throwable $th) {
    var_dump($th);
}