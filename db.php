<?php

session_start(); //inicio una sesion, ya puedo empezar a guardar datos en esta sesion. Voy a guardar mensajes acá

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'crud_php'
);

// if(isset($connection)) {
//     echo 'DB is connect';
// }


?>
