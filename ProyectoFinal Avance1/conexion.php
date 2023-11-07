<?php
    $host   =   "localhost";
    $user   =   "root";
    $pass   =   "";
    $db     =   "universidad";

    $conexion = mysqli_connect($host, $user, $pass, $db);

    if(!$conexion){
        echo "fallo la conexion";
    }

?>

<!--"localhost","id21123371_workuni","Gojo5391!","id21123371_unitrabajos"-!>
